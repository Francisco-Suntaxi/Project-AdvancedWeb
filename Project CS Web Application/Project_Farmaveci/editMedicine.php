<?php
	require_once("connectMedicine.php");

	$id = $_POST['id'];
	$Name = $_POST["nameMedicine"];
	$Id = $_POST["idMedicine"];
	$Category = $_POST["categoryMedicine"];
	$Description = $_POST["descriptionMedicine"];
	$Price = $_POST["priceMedicine"];
	$Quantity = $_POST["quantityMedicine"];
	$ElabDate = $_POST["ElaborationDateMedicine"];
	$ExpDate = $_POST["ExpirationDateMedicine"];


	$condition = array("Id" => $Id);
	$medicineModified = array("Name"=>$Name,"Id"=>$Id,"Category"=>$Category,"Description"=>$Description,"Price"=>$Price,"Quantity"=>$Quantity,"ElaborationDate"=>$ElabDate,"ExpirationDate"=>$ExpDate);
	$medicines->updateOne($condition,['$set' => $medicineModified]);

	header("Refresh: 0;url=main.php?mensaje=3")
?>   