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
            $string = $_GET["condition"];
            $datos = explode(" ", $string);
           ?>
        <form class="form-horizontal" action="findNameMedicine.php" method="post">
            <h1>Find Medicines  <small>for Name</small></h1>
            <div class="control-group">
                <label class="control-label" for="findName">Name</label>
                <div class="controls">
                    <input type="text" name="findName" id="findName" class="input-xlarge" placeholder="Name of Medicine"/>
                </div>
            </div>
            
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-default btn-primary"><i class="icon-book icon-white"></i> Search Medicine</button>
                </div>
            </div>
             
        </form>

            <h3>Found Medicines Table</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Elaboration Date</th>
                        <th>Expiration Date</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                      
                        require_once("connectMedicine.php");
	                    if ($medicines->count() >0 ){
	                	                  
                                                                       
                    ?>
                    <tr>
                        <td><?php echo $datos[0] ?></td>
                        <td><?php echo $datos[1] ?></td>
                        <td><?php echo $datos[2] ?></td>
                        <td><?php echo $datos[3] ?></td>
                        <td><?php echo $datos[4] ?></td>
                        <td><?php echo $datos[5] ?></td>
                        <td><?php echo $datos[6]?></td>
                        <td><?php echo $datos[7]?></td>
             
                    </tr>
                    <?php
                     
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> No medicines found in the Database</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
        <div class="container">
           <?php
            error_reporting(0);
            $string1 = $_GET["condition1"];
            $datos1 = explode(" ", $string1);
           ?>
        <form class="form-horizontal" action="findCategoryMedicine.php" method="post">
            <h1>Find Medicines  <small>for Category</small></h1>
            <div class="control-group">
                <label class="control-label" for="findCategory">Category</label>
                <div class="controls">
                    <input type="text" name="findCategory" id="findCategory" class="input-xlarge" placeholder="Category of Medicine"/>
                </div>
            </div>
            
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-default btn-primary"><i class="icon-book icon-white"></i> Search Medicine</button>
                </div>
            </div>
             
        </form>

            <h3>Found Medicines Table</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Elaboration Date</th>
                        <th>Expiration Date</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                      
                        require_once("connectMedicine.php");
	                    if ($medicines->count() >0 ){
	                	                  
                                                                       
                    ?>
                    <tr>
                        <td><?php echo $datos1[0] ?></td>
                        <td><?php echo $datos1[1] ?></td>
                        <td><?php echo $datos1[2] ?></td>
                        <td><?php echo $datos1[3] ?></td>
                        <td><?php echo $datos1[4] ?></td>
                        <td><?php echo $datos1[5] ?></td>
                        <td><?php echo $datos1[6]?></td>
                        <td><?php echo $datos1[7] ?></td>
             
                    </tr>
                    <?php
                     
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> No medicines found in the Database</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</html>
