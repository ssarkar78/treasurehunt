<?php
 // Starting Session
session_start();
require("mail.php");
if(isset($_POST['submit'])){
    include('db.php');
    $mysqli = new mysqli("localhost",$user,$pwd,$dbName);
    switch($_POST['submit']){
        case "Register":
        $fname = $mysqli->real_escape_string($_POST['fname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $college = $mysqli->real_escape_string($_POST['college']);
        $phone = $mysqli->real_escape_string($_POST['phone']);
        $pwd = bin2hex(openssl_random_pseudo_bytes(4));
        $query = "INSERT INTO user_details (u_name, u_email, u_college, u_contact, u_pwd) VALUES ('".$fname."', '".$email."', '".$college."',".$phone.", '".$pwd."')";
        //echo $query;
        $result = $mysqli->query($query);
        if($result){
            sendPwd($pwd,$email);
        }
        break;
        case "Login":
        $email = $mysqli->real_escape_string($_POST['email']);
        $pwd = $mysqli->real_escape_string($_POST['pwd']);
        $query = "select * from user_details where u_pwd='$pwd' AND u_email='$email'";
        $result = $mysqli->query($query);
        if($result->num_rows>0){
            $_SESSION['login_user_email']=$email;
                while ($obj = $result->fetch_object()) {
                    $_SESSION['login_user_name']=$obj->u_name;
                    $_SESSION['login_user_college']=$obj->u_college;
                    $_SESSION['login_user_lvl']=$obj->u_lvl;
                    $_SESSION['last_lvl_time']=date("Y-M-d H:i:s", strtotime($obj->time)+5.5*3600);
                }
            }
        else{
            echo "Incorrect Password or Not Registered";
        }
        break;
    }
    $mysqli->close();
}
?>
