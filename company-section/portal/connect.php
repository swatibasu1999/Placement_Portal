<?php
require_once __DIR__ . '/vendor/autoload.php'; 
try{ 
$client = new MongoDB\Client('mongodb+srv://admin_project:admin_project@cluster0.gwbjb.mongodb.net/?retryWrites=true&w=majority');
$db=$client->placement_portal;
$collection=$db->questions;
$collection1=$db->questions1;
echo " ";
}

catch(Exception $e){
	die("error");
}
session_start();
?>