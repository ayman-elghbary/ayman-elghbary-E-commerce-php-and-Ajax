<?php
include 'connect.php';
$id=$_POST['id'];
$name=$_POST['name'];

$sql="UPDATE category SET name='$name' WHERE id=$id ";
$conn->query($sql);


// $pr=$conn->query($sql);
// if (!$pr) {
// echo $conn->error;}
header("location:../category.php");
?>