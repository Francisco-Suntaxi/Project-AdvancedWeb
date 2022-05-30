<?php 
require 'vendor/autoload.php';
$connection = new MongoDB\Client;
$mongo = new MongoDB\Client('mongodb://localhost:27017');
$db = $mongo->farmaciadb;//database
$medicines = $db->medicinas;//collection
?>