<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];


  $mailTo = "hakeemkayodesulyman@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\r\n".$message;

  mail($mailFrom, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}