<?php 
session_start();
unset($_SESSION['user']);
$_SESSION['cabinet'] = 0;
header('Location: ../site.php'); ?>