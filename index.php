<?php
   include('login.php'); // Includes Login Script
   if(isset($_SESSION['login_user_email']))header("Location: profile.php");
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="assets/js/jquery.js"></script>
      <link href="assets/css/main_v1.css" rel="stylesheet" type="text/css">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
   </head>
   <body style="background-image:url('assets/img/indexBG.jpg');">
      <div class="top-bar">
         <form method='post' class=""><span><b>Login : </b></span>
            <input type="text" name= "email" placeholder="Email" required/>
            <input type="password" name= "pwd" placeholder="Password" required/>
            <input class="form-submit-button" name="submit" type="submit" onclick="myFunction()" value="Login" >
         </form>
      </div>
      <div class="regi-panel">
         <form method='post'>
            <ul>
               <b>New Participant:</b><br>
               <li>
                  <input type="text" name="fname"   placeholder="Full Name" required/>
               </li>
               <li>
                  <input type="text" name="email" placeholder="Email" required/>
               </li>
               <li>
                  <input type="text" name="college" placeholder="College/Company Name" required/>
               </li>
               <li>
                  <input type="text" name= "phone" placeholder="Phone No." required/>
               </li>
               <input class="form-submit-button" type="submit" name="submit" onclick="myFunction()" value="Register">
            </ul>
         </form>
      </div>
      <?php include('footer.php'); ?>
   </body>
</html>