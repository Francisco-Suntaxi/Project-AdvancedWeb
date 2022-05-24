<?php 
	$mongo = new Mongo();
	$db = $mongo->selectDB("farmaciadb");
	$medicines = $mongo->selectCollection($db,"medicinas");
?>