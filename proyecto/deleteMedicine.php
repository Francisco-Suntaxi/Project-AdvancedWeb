<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("farmaciadb");
	$medicines = $mongo->selectCollection($db,"medicinas");

	$id = $_GET["id"];

	$condicion = array("_id" => new MongoId($id));
	if ($medicines->count($condicion) == 1){
		$medicines->remove($condicion);
	}
	
	header("Refresh: 0;url=index.php?mensaje=1");
?>