<?php 
require 'vendor/autoload.php';
$connection = new MongoDB\Client;
$mongo = new MongoDB\Client('mongodb+srv://admin:admin@cluster0.pukdr.mongodb.net/?retryWrites=true&w=majority');
$db = $mongo->farmaciadb;//database
$medicines = $db->medicinas;//collection
?>