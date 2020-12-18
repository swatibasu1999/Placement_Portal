<?php
session_start();
include "../connection.php";
$exam_category= $_GET["exam_category"];
$_SESSION['exam_category'] = $exam_category;
//$query = $collection->findOne($exam_category);
//$temp = $collection->findOne(array('Email Address'=> $email));
$query = $link->findOne(array('category'=>$exam_category));

$_SESSION["exam_time"] = $query["exam_time_in_minutes"];

$date = date("Y-m-d H:i:s");
$_SESSION["end_time"] = date("Y-m-d H:i:s",strtotime($date."+$_SESSION[exam_time] minutes"));
$_SESSION["exam_start"] = "yes";
?>