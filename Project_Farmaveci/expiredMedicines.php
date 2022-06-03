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
            
            <h1>Expired Medicines <small>date of medicines</small><br><br></h1>
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
                    
                            date_default_timezone_set('America/Guayaquil');
                            $actual_date = date_create("now");
                            $date = date_create($documento["ExpirationDate"]);
	
                            if( $actual_date >= $date )
                            {?>
                                <tr>
                                <td><?php echo $documento["Id"]; ?></td>
                                <td><?php echo $documento["Name"]; ?></td>
                                <td><?php echo $documento["Category"]; ?></td>
                                <td><?php echo $documento["Description"]; ?></td>
                                <td><?php echo $documento["Quantity"]; ?></td>
                                <td><?php echo $documento["Price"]; ?></td>
                                <td><?php echo $documento["ElaborationDate"]; ?></td>
                                <td><?php echo $documento["ExpirationDate"]; ?></td>
                                
                                <td><a href="deleteMedicine.php?id=<?php echo $documento['Id'] ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</a></td>
                    
                                </tr>

                            <?php 
                        }?>
                    
                    <?php
                        }
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> No medicines in the Database</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <h1><br><br>Medicines Close to Expiration <small>in 30 days or less</small><br><br></h1>
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
                    
                            date_default_timezone_set('America/Guayaquil');
                            $actual_date = date_create("now");
                            $date = date_create($documento["ExpirationDate"]);
	
                            if( $actual_date < $date )
                            {
                                $diff = $actual_date->diff($date);
                                if($diff->days <= 30){

                                
                                ?>
                                <tr>
                                <td><?php echo $documento["Id"]; ?></td>
                                <td><?php echo $documento["Name"]; ?></td>
                                <td><?php echo $documento["Category"]; ?></td>
                                <td><?php echo $documento["Description"]; ?></td>
                                <td><?php echo $documento["Quantity"]; ?></td>
                                <td><?php echo $documento["Price"]; ?></td>
                                <td><?php echo $documento["ElaborationDate"]; ?></td>
                                <td><?php echo $documento["ExpirationDate"]; ?></td>
                                
                                <td><a href="modifyMedicine.php?id=<?php echo $documento['Id'] ?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i> Modify</a></td>
                                <td><a href="deleteMedicine.php?id=<?php echo $documento['Id'] ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</a></td>
                    
                                </tr>

                            <?php 
                                }
                        }?>
                    
                    <?php
                        }
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> No medicines in the Database</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>

</html>