<?php 
require 'vendor/autoload.php';
$connection = new MongoDB\Client;
$mongo = new MongoDB\Client('mongodb+srv://student:1234@cluster0.n0fcgad.mongodb.net/?retryWrites=true&w=majority');
$db = $mongo->farmaciadb;//database
$medicines = $db->medicinas;//collection
?>