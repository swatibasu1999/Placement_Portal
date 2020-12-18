<?php
require_once __DIR__ . '/vendor/autoload.php';
try {
    $client = new MongoDB\Client(
        'mongodb+srv://admin_project:admin_project@cluster0.gwbjb.mongodb.net/?retryWrites=true&w=majority'
    );
    //echo "Connection to database Successfull!";echo"<br />";

    $db = $client->placement_portal;
    //echo "Databse placement_portal selected";

    $collection = $db->user_details;
    $link = $db->exam_category;
    $collection1 = $db->cisco;
    $collection2 = $db->cisco_options;
    $user = $db->user_full_details;
    $ques= $db->questions;
    $ques1 = $db->questions1;
    $admin = $db->admin;
    //echo "Collection user_details Selected Successfully";
} catch (Exception $e) {
    die("Error. Couldn't connect to the server. Please Check");
}
       session_start();
?>