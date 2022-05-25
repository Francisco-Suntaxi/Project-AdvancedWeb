<?php
	require 'vendor/autoload.php';
	$connection = new MongoDB\Client;


	$mongo = new MongoDB\Client('mongodb://localhost:27017');
	$db = $mongo->farmaciadb;
	$medicines = $db->medicinas;


	$Name = $_POST["nameMedicine"];
	$Id = $_POST["idMedicine"];
	$Description = $_POST["descriptionMedicine"];
	
	$newMedicine = array("Name"=>$Name,"Id"=>$Id,"Description"=>$Description);
	$medicines->insertOne($newMedicine);

	header("Refresh: 0;url=index.php?mensaje=2")
?>