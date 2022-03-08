<?php
session_start();
include "connect.php";
$name=$_POST['name'];
$parent=$_POST['parent'];
$sql="INSERT INTO category( name, parent)VALUES ('$name','$parent')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
 header("location:../category.php");
?>