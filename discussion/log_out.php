<?php 
session_start(); 
if(!isset($_SESSION['user_name'])) {
header("location:index.php");
}
else {
session_destroy();
header("location:index.php");
}
?>