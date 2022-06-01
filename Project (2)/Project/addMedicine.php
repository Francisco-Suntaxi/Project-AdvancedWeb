<?php
	require_once("connectMedicine.php");
	$Name = $_POST["nameMedicine"];
	$Id = $_POST["idMedicine"];
	$Description = $_POST["descriptionMedicine"];
	$category = $_POST["category"];
	$Price = $_POST["priceMedicine"];
	$Quantity = $_POST["quantityMedicine"];
	$ElabDate = $_POST["ElaborationDateMedicine"];
	$ExpDate = $_POST["ExpirationDateMedicine"];
	
	$newMedicine = array("Name"=>$Name,"Id"=>$Id,"Description"=>$Description,"Category"=>$category,"Price"=>$Price,"Quantity"=>$Quantity,"ElaborationDate"=>$ElabDate,"ExpirationDate"=>$ExpDate);
	$medicines->insertOne($newMedicine);

	header("Refresh: 0;url=main.php?mensaje=2")
?>