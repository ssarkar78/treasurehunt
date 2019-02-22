<?php
function sendPwd($pwd,$email){
require("class.phpmailer.php");
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "bitesys.iims";
$mail->Password = "bitesys@15";
$mail->SetFrom("bitesys.iims@gmail.com");
$mail->Subject = "Password For Treasure hunt";
$mail->Body = "Your password for online Treasure Hunt event is ".$pwd;
$mail->AddAddress($email);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Password has been mailed. Use the password to login";
 }
}

?>
