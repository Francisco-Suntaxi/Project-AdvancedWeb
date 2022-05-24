<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("farmaciadb");
	$medicines = $mongo->selectCollection($db,"medicinas");


	$id = $_POST['id'];
	$Name = $_POST["nameMedicine"];
	$Id = $_POST["idMedicine"];
	$Description = $_POST["descriptionMedicine"];


	$condition = array("_id" => new MongoId($id));
	$medicineModified = array("Name"=>$Name,"Id"=>$Id,"Description"=>$Description);
	$medicines->update($condition, $medicineModified);

	header("Refresh: 0;url=index.php?mensaje=3")
?>   