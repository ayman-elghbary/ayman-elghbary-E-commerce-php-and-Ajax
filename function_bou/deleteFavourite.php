<?php
session_start();
include_once '../admin/function/connect.php';

$id=$_GET['id'];
$sql="DELETE FROM favourite WHERE   pro_id = $id";
$conn->query($sql);
header("location:../favourite.php");
?>



