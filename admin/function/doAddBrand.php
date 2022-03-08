<?php
session_start();
include "connect.php";
$name=$_POST['name'];

$sql="INSERT INTO brand( name)VALUES ('$name')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
 header("location:../brand.php");
?>