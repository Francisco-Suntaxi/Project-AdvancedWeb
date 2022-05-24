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
                    $condition = array("_id" => new  MongoId($id));
                    if($medicines->count($condition) == 1){
                        $medicinesAux = $medicines->findOne($condition);
                    }
                ?>
                <div class="control-group">
                <label class="control-label" for="inputName">Name</label>
                <div class="controls">
                    <input type="text" name="nameMedicine" id="inputName" class="input-xlarge" placeholder="Name of Medicine"/>
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="inputId">Id</label>
                <div class="controls">
                    <input type="text" name="idMedicine" id="inputId" class="input-xlarge" placeholder="Id of Medicine"/>
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="inputDescription">Description</label>
                <div class="controls">
                    <input type="text" name="descriptionMedicine" id="inputDescription" class="input-xlarge" placeholder="Description of Medicine"/>
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
