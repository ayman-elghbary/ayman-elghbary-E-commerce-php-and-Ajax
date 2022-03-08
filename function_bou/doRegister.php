<?php
session_start();
include '../admin/function/connect.php';
extract($_POST);
$new_password=md5($password);
$sql="INSERT INTO customer( name, password) VALUES ('$name','$new_password')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
	  header("location:../index.php");
?>