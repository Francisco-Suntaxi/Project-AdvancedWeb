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
            <h1>Update <small><br>medicine</small></h1>
			<div class="container col-5" >
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
					<label class="form-check-inline" for="inputName">Name</label>
					<div class="controls">
						<input type="text" name="nameMedicine" id="inputName" class="form-control" value=<?php echo $medicinesAux["Name"] ?>>
					</div>
				</div>
				<input type="hidden"  name="idMedicine" id="inputId" class="input-xlarge" value=<?php echo $medicinesAux["Id"] ?>>
				<div class="control-group">
					<label class="form-check-inline" for="inputCategory">Category</label>
					<div class="controls">
						<input type="text" name="categoryMedicine" id="inputCategory" class="form-control" value=<?php echo $medicinesAux["Category"] ?>>
					</div>
				</div>
				 <div class="control-group">
					<label class="form-check-inline" for="inputDescription">Description</label>
					<div class="controls">
						<input type="text" name="descriptionMedicine" id="inputDescription" class="form-control" value=<?php echo $medicinesAux["Description"] ?>>
					</div>
				</div>
				<div class="control-group">
					<label class="form-check-inline" for="quantityMedicine">Quantity</label>
					<div class="controls">
						<input type="text" name="quantityMedicine" id="quantityMedicine" class="form-control" value=<?php echo $medicinesAux["Quantity"] ?>>
					</div>
				</div>
				<div class="control-group">
					<label class="form-check-inline" for="inputPrice">Price</label>
					<div class="controls">
						<input type="text" name="priceMedicine" id="inputPrice" class="form-control" value=<?php echo $medicinesAux["Price"] ?>>
					</div>
				</div>

						<input type="hidden" name="ElaborationDateMedicine" id="inputDateEl" class="form-control" value=<?php echo $medicinesAux["ElaborationDate"] ?>>


						<input type="hidden" name="ExpirationDateMedicine" id="inputDateEx" class="form-control" value=<?php echo $medicinesAux["ExpirationDate"] ?>>
					<br>
					<div class="control-group">
						<div class="controls">
							<input type="hidden" name="id" value="<?php echo $id ?>" />
							<button type="submit" class="btn btn-default btn-primary">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  								<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
								</svg>
								
								Save Medicine</button>
						</div>
					</div>

				</form>
		</div>
        </div><br>
		
		<hr>
		
		<footer class="container">
			<a  href=""></a>
			<p class="float-end"></p>
			<p>&copy; 2021–2022 FARMAVECI.</p>
		</footer>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</html>
