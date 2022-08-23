<?php 
session_start();
unset($_SESSION["ID"]);
$_SESSION['oturum']=false;
session_destroy();
header("Location:index.php")
?>