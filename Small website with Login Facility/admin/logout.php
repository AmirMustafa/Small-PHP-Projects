<?php
unset($_SESSION['username']);
unset($_SESSION['login']);
session_destroy();
header('location:index.php');
?>

