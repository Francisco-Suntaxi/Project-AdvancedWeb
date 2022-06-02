<!DOCTYPE html>
<html lang="es-CL">
    <head>
        <?php
        	require_once("head.php");
        ?>
    </head>
    <body>
        <div class="navbar navbar navbar-inverse navbar-fixed-top">
        	<?php
        		require_once("nav.php");
        	?>
        </div>
        <div class="container">
            
            <form class="form-horizontal" action="editMedicine.php" method="post">
                <?php 
                    require_once("connectMedicine.php");
                    $id =  $_GET['id'];
                    $condition = array("Id" => $id);
                    if($medicines->count($condition) == 1){
                        $medicinesAux = $medicines->findOne($condition);
                    }
                ?>
                <div class="control-group">
                <label class="control-label" for="inputName">Name</label>
                <div class="controls">
                    <input type="text" name="nameMedicine" id="inputName" class="input-xlarge" value=<?php echo $medicinesAux["Name"] ?>>
                </div>
            </div>
            <input type="hidden"  name="idMedicine" id="inputId" class="input-xlarge" value=<?php echo $medicinesAux["Id"] ?>>
           
             <div class="control-group">
                <label class="control-label" for="inputDescription">Description</label>
                <div class="controls">
                    <input type="text" name="descriptionMedicine" id="inputDescription" class="input-xlarge" value=<?php echo $medicinesAux["Description"] ?>>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="quantityMedicine">Quantity</label>
                <div class="controls">
                    <input type="text" name="quantityMedicine" id="quantityMedicine" class="input-xlarge" value=<?php echo $medicinesAux["Quantity"] ?>>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPrice">Price</label>
                <div class="controls">
                    <input type="text" name="priceMedicine" id="inputPrice" class="input-xlarge" value=<?php echo $medicinesAux["Price"] ?>>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputDateEl">Elaboration Date</label>
                <div class="controls">
                    <input type="text" name="ElaborationDateMedicine" id="inputDateEl" class="input-xlarge" value=<?php echo $medicinesAux["ElaborationDate"] ?>>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputDateEx">Expiration Date</label>
                <div class="controls">
                    <input type="text" name="ExpirationDateMedicine" id="inputDateEx" class="input-xlarge" value=<?php echo $medicinesAux["ExpirationDate"] ?>>
                </div>
            </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                        <button type="submit" class="btn btn-default btn-primary"><i class="icon-book icon-white"></i > Save Medicine</button>
                    </div>
                </div>
             
            </form>
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</html>
