<?php
session_start();
include 'connect.php';
$id=$_POST['id'];
if(!$_SESSION || $_SESSION['priv_id']<300){
   
    // header("refresh:5;url=../product.php");
    
}else {
    $sql="DELETE FROM brand WHERE id=$id";
    $conn->query($sql);
    // header("location:../product.php");
    
}


?>