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
            <?php
            error_reporting(0);
            $mensaje = $_GET["mensaje"];
            if ($mensaje == 1) {
                echo "<p class='btn  btn-danger'><i class='icon-trash icon-white'></i> El Medicamento fue eliminado con éxito.</p><br><br>";
            }
            if ($mensaje == 2) {
                echo "<p class='btn  btn-success'><i class='icon-ok icon-white'></i> El Medicamento fue guardado con éxito.</p><br><br>";
            }
            if ($mensaje == 3) {
                echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> El Medicamento fue modificado con éxito.</p><br><br>";
            }
        ?>
        <form class="form-horizontal" action="addMedicine.php" method="post">
            <h1>Medicine System Control <small>date of medicines</small></h1>
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
                    <button type="submit" class="btn btn-default btn-primary"><i class="icon-book icon-white"></i> Save Medicine</button>
                </div>
            </div>
             
        </form>

            <h3>Registered Medicine Table</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Modify</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        require_once("connectMedicine.php");
                        if ($medicines->count()>0)
                        {
                            $documentos = $medicines->find();
                            foreach ($documentos as $documento) {                        
                    ?>
                    <tr>
                        <td><?php echo $documento["Id"]; ?></td>
                        <td><?php echo $documento["Name"]; ?></td>
                        <td><?php echo $documento["Description"]; ?></td>
                        <td><?php echo $documento["quantityMedicine"]; ?></td>
                        <td><?php echo $documento["priceMedicine"]; ?></td>
                        
                        <td><a href="modifyMedicine.php?id=<?php echo $documento['Id'] ?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i> Modify</a></td>
                        <td><a href="deleteMedicine.php?id=<?php echo $documento['Id'] ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</a></td>

                    </tr>
                    <?php
                        }
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</html>
