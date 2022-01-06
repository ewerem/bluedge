<?php 

session_start();
ob_start();
include'../access/access.php';

if(isset($_SESSION['admin'])){
	session_destroy();
	header('location:alogin.php');
}else{
	header('location:../index.php');
}

?>