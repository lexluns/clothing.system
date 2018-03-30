<?php 



	include 'functions.php';
	$conn = new dbConn();
	$catcher = $_GET['Prod_id'];
	$conn -> delete($catcher);
	header('location: http://localhost/clothing/viewproductnew.php');


?>