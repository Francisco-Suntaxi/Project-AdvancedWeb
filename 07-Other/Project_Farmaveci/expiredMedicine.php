<!DOCTYPE html>
<html lang="es-CL">
    <head>
        <?php
			date_default_timezone_set('America/Guayaquil');
        	require_once("head.php");
        ?>
    </head>
    <body>
        <div class="">			
        	<?php
        		require_once("nav.php");
        	?>
        </div>
		
		<hr>
		
        <div class="container text-center">
            
			
		<h1>Expired Medicines <small><br>Date of medicines</small><br><br></h1>
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

			<h1><br><br><br>Medicines Close to Expiration <small><br>in 30 days or less</small><br><br></h1>
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
        </div> <br>
		
		<hr>
		
		<footer class="container">
			<a  href=""></a>
			<p class="float-end"></p>
			<p>&copy; 2021–2022 FARMAVECI.</p>
		</footer>
		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>   
    </body>

    <script>datePickerId.max = new Date().toISOString().split("T")[0];</script>
</html>