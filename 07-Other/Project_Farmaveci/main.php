<!DOCTYPE html>
<html lang="es-CL">
    <head>
        <?php
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
			<h1>Medicine System Control <small><br>Date of medicines</small></h1>
			<div class="container col-4">
				<form action="addMedicine.php" method="post">
					<fieldset class="form-control">
						<div class="control-group">
							<label class="form-check-inline" for="inputName">Name</label>
							<div class="controls">
								<input type="text" name="nameMedicine" id="inputName" class="form-control" placeholder="Name of Medicine"/>
							</div>
						</div>
						 <div class="control-group">
							<label class="form-check-inline" for="inputId">Id</label>
							<div class="controls">
								<input type="text" name="idMedicine" id="inputId" class="form-control" placeholder="Id of Medicine"/>
							</div>
						</div>
						 <div class="control-group">
							<label class="form-check-inline" for="inputDescription">Description</label>
							<div class="controls">
								<input type="text" name="descriptionMedicine" id="inputDescription" class="form-control" placeholder="Description of Medicine"/>
							</div>
						</div>
						<div class="control-group">
							<label class="form-check-inline" for="categoryMedicine">Category</label>
						<div class="controls">
							<select name="categoryMedicine" id="categoryMedicine" class="form-select" >
								<option >Analgésicos</option>
								<option >Antiinflamatorios</option>
								<option >Antiinfecciosos</option>
								<option >Mucolíticos</option>
								<option >Antitusivos</option>
								<option >Antiulcerosos</option>
								<option >Antiácidos</option>
								<option >Laxantes</option>
								<option >Antipiréticos</option>
								<option >Antialérgicos</option>
								</select>
						</div>
						</div>
						<div class="control-group">
							<label class="form-check-inline" for="quantityMedicine">Quantity</label>
							<div class="controls">
								<input type="text" name="quantityMedicine" id="quantityMedicine" class="form-control" placeholder="Quantity of Medicine"/>
							</div>
						</div>
						<div class="control-group">
							<label class="form-check-inline" for="inputPrice">Price</label>
							<div class="controls">
								<input type="number" step="0.01" name="priceMedicine" id="inputPrice" class="form-control" placeholder="Price of Medicine"/>
							</div>
						</div>
						<div class="control-group">
							<label class="form-check-inline" for="inputDateEl">Elaboration Date</label>
							<div class="controls">
								<input type="date" name="ElaborationDateMedicine" id="inputDateEl" class="form-control" placeholder="Elaboration Date of Medicine" max="<?= date('Y-m-d'); ?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="form-check-inline" for="inputDateEx">Expiration Date</label>
							<div class="controls">
								<input type="date" name="ExpirationDateMedicine" id="inputDateEx" class="form-control" placeholder="Expiration Date of Medicine" min="<?= date('Y-m-d'); ?>"/>
							</div>
						</div><br>
						<div class="control-group">			
							<button type="submit" class="btn btn-default btn-primary">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  								<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
								</svg>
								
								Save Medicine</button>
						
						</div>
					</fieldset>
			</form>
			</div><br>
			
			<hr>
			
            <h3>Registered Medicine Table</h3>
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
                        
                        <td><a href="modifyMedicine.php?id=<?php echo $documento['Id'] ?>" class="btn btn-warning">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
 							 <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
							</svg>
							
							Modify</a></td>
                        <td><a href="deleteMedicine.php?id=<?php echo $documento['Id'] ?>" class="btn btn-danger">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
							</svg>
							
							Delete</a></td>
             
                    </tr>
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