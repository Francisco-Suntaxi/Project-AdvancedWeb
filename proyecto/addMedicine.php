<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("farmaciadb");
	$medicines = $mongo->selectCollection($db,"medicinas");


	$Name = $_POST["nameMedicine"];
	$Id = $_POST["idMedicine"];
	$Description = $_POST["descriptionMedicine"];
	
	$newMedicine = array("Name"=>$Name,"Id"=>$Id,"Description"=>$Description);
	$medicines->insert($newMedicine);

	header("Refresh: 0;url=index.php?mensaje=2")
?>