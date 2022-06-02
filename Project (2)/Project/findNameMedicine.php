<?php
	require_once("connectMedicine.php");
	$Name = $_POST["findName"];

    $condicionU = array("Name"=>$Name);
	$suma="";
	if ($medicines->count($condicionU) == 1 ){
        $documentos = $medicines->find($condicionU);
        foreach ($documentos as $documento)
        {
           $suma= $documento["Id"]." ".$Name." ".$documento["Category"]." ".$documento["Description"]." ".$documento["Price"]." ".$documento["Quantity"]." ".$documento["ElaborationDate"]." ".$documento["ExpirationDate"];
        }
        
	}
    header("Refresh: 0;url=findMedicine.php?condition=".$suma);

	
?>