
<?php

// header('Content-Type: application/json');
// header("Cache-Control: no-cache");
// header("Pragma: no-cache");

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$service = trim($_POST["service"]);

if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  echo '{"status":400, "msg":"Please provide valid name!"}';
  exit();
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo '{"status":400, "msg":"Please provide correct email address!"}';
  exit();
}

if($name=="" || $email =="" ){
    echo '{"status":400, "msg":"Please provide name and email address!"}';
    exit();
}


$headers = "From: ".$email."\r\n";

$message = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$_POST["message"];

$to="support@rabeens.com";
$subject  =$service." : rabeens.com";
$mail_response = mail($to, $subject, $message, $headers, '-f support@rabeens.com');
echo '{"status":200, "msg":"Thanks for contacting us. We will get back to you."}';

