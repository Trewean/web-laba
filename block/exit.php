<?php 
session_start();
unset($_SESSION['name']);
$_SESSION['cabinet'] = 0;
header('Location: ../site.php'); ?>