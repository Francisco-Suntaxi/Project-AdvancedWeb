<?php
	require_once("connectMedicine.php");
	$Category = $_POST["findCategory"];

    $condicionU = array("Category"=>$Category);
    $suma="";
	if ($medicines->count($condicionU) == 1 ){
        $documentos = $medicines->find($condicionU);
        foreach ($documentos as $documento)
        {
           $suma= $documento["Id"]." ".$documento["Name"]." ".$Category." ".$documento["Description"]." ".$documento["Price"]." ".$documento["Quantity"]." ".$documento["ElaborationDate"]." ".$documento["ExpirationDate"];
        }
        
	}
    header("Refresh: 0;url=findMedicine.php?condition1=".$suma);

	
?>