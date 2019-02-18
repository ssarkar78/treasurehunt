<?php session_start();
if(!isset($_SESSION['login_user_email'])){
    ob_start();
    header("Location: index.php");
    ob_end_flush();
    die();
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Treasure Hunt</title>
      <script src="assets/js/jquery.js"></script>
      <link href="assets/css/main_v1.css" rel="stylesheet" type="text/css">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
   </head>
   <body style="background-image:url('assets/img/bg.jpg')">
   <div id="nav_bar"> <a class="current" href="#">Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;
   <a href="guide.php">Guidelines</a>&nbsp;&nbsp;|&nbsp;&nbsp;
   <a href="game.php">Treasure Hunt</a>&nbsp;&nbsp;|&nbsp;&nbsp; 
   <a href="ranking.php">Leader Board</a></div>
      <div class="bg" style="text-align:center;color:white;background-image: url('assets/img/darkbg.jpg')">
         <h2>User Profile</h2><br><br>
         <b>User Name : <?php echo $_SESSION['login_user_name'];?><br>Registerd email id : 
         <?php echo $_SESSION['login_user_email'];?><br>User College : 
         <?php echo $_SESSION['login_user_college'];?><br>Current Game Level : 
         <?php echo $_SESSION['login_user_lvl'];if($_SESSION['login_user_lvl']>1){?><br>Last level Completed on :
         <?php echo $_SESSION['last_lvl_time'];}?></b>
         <br><br><a class='btn' href="logout.php"> Log Out </a>
         </b>
      </div>
      <?php include('footer.php'); ?>
   </body>
</html>
