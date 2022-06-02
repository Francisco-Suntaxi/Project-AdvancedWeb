<?php
	require_once("connectMedicine.php");
	$Name = $_POST["nameMedicine"];
	$Id = $_POST["idMedicine"];
	$Category = $_POST["categoryMedicine"];
	$Description = $_POST["descriptionMedicine"];
	$Price = $_POST["priceMedicine"];
	$Quantity = $_POST["quantityMedicine"];
	$ElabDate = $_POST["ElaborationDateMedicine"];
	$ExpDate = $_POST["ExpirationDateMedicine"];
	
	$newMedicine = array("Name"=>$Name,"Id"=>$Id,"Category"=>$Category,"Description"=>$Description,"Price"=>$Price,"Quantity"=>$Quantity,"ElaborationDate"=>$ElabDate,"ExpirationDate"=>$ExpDate);
	$medicines->insertOne($newMedicine);

	header("Refresh: 0;url=main.php?mensaje=2")
?>