<?php
//get data from form

if (isset($_POST['Sumbit'])){
$name = $_POST['name'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$sname = $_POST['sname'];
$child1 = $_POST['child1'];
$age1 = $_POST['age1'];
$child2 = $_POST['child2'];
$age2 = $_POST['age2'];
$child3 = $_POST['child3'];
$age3 = $_POST['age3'];
$child4 = $_POST['child4'];
$age4 = $_POST['age4'];
$child5 = $_POST['child5'];
$age5 = $_POST['age5'];
$sign = $_POST['sign'];
$date = $_POST['date'];

$to = "askale_asmelash@yahoo.com";
$subject = "Mail From website";
$txt ="name = ". $name . "\r\n  address1 = " . $address1 . "\r\n address2 =" . $address2 .
"\r\n city =" . $city . "\r\n state =" . $state . "\r\n zip =" . $zip .
"\r\n telephone =" . $telephone . "\r\n email =" . $email . "\r\n sname =" . $sname .
"\r\n child1 =" . $child1 . "\r\n age1 =" . $age1 . "\r\n child2 =" . $child2 .
"\r\n age2 =" . $age2 . "\r\n child3 =" . $child3 . "\r\n age4 =" . $age4 .
"\r\n child5 =" . $child4 . "\r\n age4 =" . $age4 . "\r\n child5 =" . $child5 .
"\r\n age5 =" . $age5 . "\r\n sign =" . $sign . "\r\n date =" . $date;


$headers = "From: askale_asmelash@yahoo.com" . "\r\n" .
"CC: askale_asmelash@yahoo.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
