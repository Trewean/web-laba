<?php 
$id = $_GET['varname'];
$connect = mysqli_connect('localhost', 'root', '', 'trades');
mysqli_query($connect, "DELETE FROM `trades` WHERE `id` = '$id' ");
 ?>