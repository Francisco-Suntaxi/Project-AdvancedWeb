<?php
	require 'vendor/autoload.php';
	$connection = new MongoDB\Client;
	$mongo = new MongoDB\Client('mongodb://localhost:27017');
	$db = $mongo->farmaciadb;
	$medicines = $db->medicinas;

	$id = $_GET["id"];

	$condicion = array("Id" => $id);
	if ($medicines->count($condicion) == 1){
		$medicines->deleteOne($condicion);
	}
	
	header("Refresh: 0;url=index.php?mensaje=1");
?>