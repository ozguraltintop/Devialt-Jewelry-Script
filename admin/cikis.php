<?php

session_start();
session_destroy();
header("Location: giris.php");

?>

<?php
ob_end_flush(); 
?>