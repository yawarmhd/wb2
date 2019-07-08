<?php

if (isset($_POST['submit'])) 


{
$name = $_POST['fname'];
$phone = $_POST['phone'];
$mailFrom = $_POST['email'];
$sname = $_POST['sname'];
$gender = $_POST['option'];
$dob = $_POST['dob'];
$grade = $_POST['option'];



$mailTo = "mohammadraway@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "New Registration by ".$name.".\n\n".$phone;

mail($mailTo, $sname, $txt, $headers);
header("Location: index.php?mailsend");
}