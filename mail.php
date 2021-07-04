<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$message = $_POST['message'];
$number = $_POST['mobile'];

$to = "askalea@gmail.com";

$subject = "Mail From BES";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number =" . $number;

$headers = "From: askale_asmelash@yahoo.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
//redirect
//
 ?>
