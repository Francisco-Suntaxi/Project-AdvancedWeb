<?php
	require 'vendor/autoload.php';
	$connection = new MongoDB\Client;
	$mongo = new MongoDB\Client('mongodb+srv://admin:admin@cluster0.pukdr.mongodb.net/?retryWrites=true&w=majority');
	$db = $mongo->farmaciadb;
	$medicines = $db->users;


	$user = $_POST['user'];
  	$pass = $_POST['password'];

	$condicionU = array("user"=>$user,"pass"=>$pass);
	
	if ($medicines->count($condicionU) == 1 ){
		header("Location: html/load.html");
	}
	else{
		header("Location: html/error.html");
	}


	
?>