<?php
session_start();
include_once '../admin/function/connect.php';
$user_id=$_SESSION['customer_id'];
$product_id=$_GET['id'];
$select=$conn->query("SELECT * FROM cart where user_id=$user_id && pro_id=$product_id");
$number=$select->num_rows;

if ($number == 0) {
    $insert="INSERT INTO cart( user_id, pro_id, quantity) VALUES ('$user_id','$product_id',1)";
    $conn->query($insert);
    header("location:../cart.php");
} elseif($number !=0) {
   $up=$select->fetch_assoc();
   $num=$up['quantity'];
   $update="UPDATE cart SET quantity=$num+1 WHERE user_id = $user_id && pro_id = $product_id";
   $conn->query($update);
     header("location:../cart.php");
   
    
}



?>