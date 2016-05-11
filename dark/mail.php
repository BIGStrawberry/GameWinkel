
<?php

require("../includes/PHPMailer-FE_v4.11/_lib/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "localhost"; // SMTP server

$mail->From     = "info@gamewinkel.com";
$mail->AddAddress("wouter.dijkstra.wd@gmail.com");

$mail->Subject  = "An HTML Message";
$mail->Body     = "Hello, <b>my friend</b>! \n\n This message uses HTML entities!";

?>
    