<?php

$email  = $_POST['email'];
$name = $_POST['name'];
$content = $_POST['content'];

if($name==""){
    echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Please enter your name.</span></div>";
    die;
}

if($email==""){
    echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Please enter your email address.</span></div>";
    die;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Invalid email format.</span></div>"; 
  die;
}

if($content==""){
    echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Please enter message.</span></div>";
    die;
}

$to      = 'webmaster@example.com';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$msg = 'From:'.$name."\n";
$msg.= $content;
$subject = 'Email contact';
if(mail($to, $subject, $content, $headers)){
    die('done');
}else{
    echo "<i class='fa fa-exclamation-triangle'></i> <span>Send message error.</span>";
    die;
}

?> 