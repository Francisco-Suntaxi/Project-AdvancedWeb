<?php
	require 'vendor/autoload.php';
	$connection = new MongoDB\Client;
	$mongo = new MongoDB\Client('mongodb://localhost:27017');
	$db = $mongo->farmaciadb;
	$medicines = $db->medicinas;

	$id = $_POST['id'];
	$Name = $_POST["nameMedicine"];
	$Id = $_POST["idMedicine"];
	$Description = $_POST["descriptionMedicine"];


	$condition = array("Id" => $Id);
	$medicineModified = array("Name"=>$Name,"Id"=>$Id,"Description"=>$Description);
	$medicines->updateOne($condition,['$set' => $medicineModified]);

	header("Refresh: 0;url=index.php?mensaje=3")
?>   