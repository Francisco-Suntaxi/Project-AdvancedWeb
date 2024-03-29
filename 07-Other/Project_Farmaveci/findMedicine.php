<!DOCTYPE html>
<html lang="es">
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
		
		<div class="container">
			<div class="container text-center">
			   <?php
				error_reporting(0);
				$string = $_GET["condition"];
				$datos = explode(" ", $string);
			   ?>
				<h1>Find Medicines  <small>for Name</small></h1>
				<div class="container col-4">
					<form action="findNameMedicine.php" method="post">
						
						<div class="control-group">	
							<label class="control-label" for="findName">Name</label>
							<div class="controls">
								<input type="text" name="findName" id="findName" class="form-control me-2" placeholder="Name of Medicine"/>
							</div>
						</div><br>

						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-outline-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
 									 <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
									</svg>
									
									Search Medicine</button>
							</div>
						</div>

					</form>
				</div>

				<h3>Found Medicines Table</h3>
					<table class="table table-striped table-bordered">
						<thead>
							<tr class="tr-head">
							<th height="39">Id</th>
							<th>Name</th>
							<th>Category</th>
							<th>Description</th>
							<th>Price</th>
							<th>Quantity</th>
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
							<td><?php echo $datos[7] ?></td>

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
			</div> <br>
			
			<hr>
			
			<div class="container text-center">
			   <?php
				error_reporting(0);
				$string1 = $_GET["condition1"];
				$datos1 = explode(" ", $string1);
			   ?>
				
				<h1>Find Medicines  <small>for Category</small></h1>
				<div class="container col-4">
					<form class="form-horizontal" action="findCategoryMedicine.php" method="post">
						
                        <div class="control-group">
							<label class="form-check-inline" for="findCategory">Category</label>
						<div class="controls">
							<select name="findCategory" id="findCategory" class="form-select" >
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
						</div><br>

						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-outline-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  									<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
									</svg>
									
									Search Medicine</button>
							</div>
						</div>

					</form>
					</div>

				<h3>Found Medicines Table</h3>
					<table class="table table-striped table-bordered">
						<thead>
							<tr class="tr-head">
							<th>Id</th>
							<th>Name</th>
							<th>Category</th>
							<th>Description</th>
							<th>Price</th>
                            <th>Quantity</th>
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
		</div><br>
		
		<hr>
		
		<footer class="container">
			<p class="float-end"></p>
			<p>&copy; 2021–2022 FARMAVECI.</p>
		</footer>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</html>
