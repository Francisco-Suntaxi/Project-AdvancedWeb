<?php
	require_once("connectMedicine.php");

	$id = $_GET["id"];

	$condicion = array("Id" => $id);
	
	if ($medicines->count($condicion) == 1){
		$medicines->deleteOne($condicion);

	}
	
	header("Refresh: 0;url=main.php?mensaje=1");
?>