<?php
	require 'vendor/autoload.php';
	$connection = new MongoDB\Client;

	$mongo = new MongoDB\Client('mongodb://localhost:27017');
	$db = $mongo->farmaciadb;
	$medicines = $db->users;


	$user = $_POST['user'];
  	$pass = $_POST['password'];

	$condicionU = array("user"=>$user,"pass"=>$pass);
	
	if ($medicines->count($condicionU) == 1 ){
		header("Location: main.php");
	}
	else{
		echo 'El usuario o password es incorrecto, DEBER CREAR ESTA PAGINA DE ERROR PARA QUE TENGA ENLACE AL INDEX NUEVAMENTE , <a href="index.html">vuelva a intenarlo</a>.<br/>';
		echo 'USUARIO: '+ $user;
	}


	
?>