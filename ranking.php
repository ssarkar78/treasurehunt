<?php session_start();
if(!isset($_SESSION['login_user_email'])){
    ob_start();
    header("Location: index.php");
    ob_end_flush();
    die();
}
?>
<!DOCTYPE html><html><head><title>Treasure Hunt</title>
<script src="assets/js/jquery.js"></script>
<link href="assets/css/main_v1.css" rel="stylesheet" type="text/css">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
   </head>
   <body style="background-image:url('assets/img/bg.jpg')">
   <div id="nav_bar"> <a href="profile.php">Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;
   <a href="guide.php">Guidelines</a>&nbsp;&nbsp;|&nbsp;&nbsp;
   <a href="game.php">Treasure Hunt</a>&nbsp;&nbsp;|&nbsp;&nbsp; 
   <a class="current" href="ranking.php">Leader Board</a></div>
<div class="bg" style="font-size:14px;color:white;background-image: url('assets/img/darkbg.jpg')">
<h3 style="text-align:center">Hall of Fame</h3>
<?php
$curr_user_email = $_SESSION['login_user_email'];
$curr_user_lvl = $_SESSION['login_user_lvl'];

include('db.php');
$mysqli = new mysqli("localhost",$user,$pwd,$dbName);


$query = "SELECT * FROM user_details ORDER BY u_lvl desc, time asc limit 10";
if($result = $mysqli->query($query)){
    echo "<div style='text-align:-webkit-center;text-align:-moz-center'><table border='1px solid white' cellpadding='5px'><tr><td width='250px'>Name</td><td style='text-align:center; width:50px'>Level</td><td style='text-align:center; width:250px'>Time</td></tr>";
    while($row=$result->fetch_row()){
        echo "<tr><td>".$row[1]."</td><td style='text-align:center'>".$row[6]."</td><td style='text-align:center'>".date( "Y-M-d H:i:s", strtotime($row[7])+5.5*3600)."</td></tr>";
    }
    echo "</table></div>";
}


?><div>Please check bitesys facebook page for level hints</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
