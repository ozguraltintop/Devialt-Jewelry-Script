<?php

session_start();
session_destroy();
header("Location: ../login.php");

?>

<?php
ob_end_flush(); 
?>