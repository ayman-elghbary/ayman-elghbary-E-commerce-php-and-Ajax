<?php
session_start();
include_once '../admin/function/connect.php';
$id=$_POST['proid'];
$userid=$_POST['userid'];
$sql="DELETE FROM cart WHERE  user_id = $userid && pro_id = $id";
$conn->query($sql);

// header("location:../cart.php");
?>