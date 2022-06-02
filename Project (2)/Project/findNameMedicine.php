<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<?php
	require_once("connectMedicine.php");
	$Name = $_POST["findName"];

    $condicionU = array("Name"=>$Name);
	$suma="";
	if ($medicines->count($condicionU) == 1 ){
        $documentos = $medicines->find($condicionU);
        foreach ($documentos as $documento)
        {
            $desc = $documento["Description"];
           $suma= $documento["Id"]."%".$Name."%".$documento["Category"]."%".$documento["Description"]."%".$documento["Price"]."%".strval($documento["Quantity"])."%".strval($documento["ElaborationDate"])."%".strval($documento["ExpirationDate"]);
        }
        
	}
    header("Refresh: 0;url=findMedicine.php?condition=".$suma);

	
?>
</html>