<?php
$name = $_POST['uname'];
$email = $_POST['uemail'];
$message = $_POST['umessage'];
$formcontent="From: $name \n Message: $message";
$recipient = "hackx.imssa@gmail.com";
$subject = "New Inquery from $uname";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: index.html", true, 301);
echo "<script type=\"text/javascript\">window.alert('Response Successfully Recieved!');
window.location.href = '/index.html';</script>"; 
exit();
?>