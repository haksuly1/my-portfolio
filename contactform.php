
<?php

//Get data for online contact form
/*
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];


  $mailTo = "hakeemkayodesulyman@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\r\n".$message;

  mail($mailFrom, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
*/

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = "hakeemkayodesulyman@gmail.com";
$subject = "Your have received an email from your online contact form";
$text ="Name = ". $name . "\r\n Email = " . $email . "\r\nTelephone = " .$telephone . "\r\nMessage = " . $message . "\r\nSubject = " . $subject;
$headers = "From: $email";
if($email!=NULL){
  mail($to,$subject.$txt,$headers);
}

header("Location:thankyou.html");

?>
