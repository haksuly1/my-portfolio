<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];


  $mailTo = "info@logisticsthrust.com";
  $headers = "From: ". $mailFrom;
  $txt = "You have receive an email from ".$name.".\n\n".$message;

  mail($mailFrom, $subject, $txt $headers);
  header("Location: index.php?mailsent");
}