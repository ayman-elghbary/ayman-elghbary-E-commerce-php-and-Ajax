<?php
    // if($_SERVER['REQUEST_METHOD']=='POST'){
session_start();
include 'connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$new_password = md5($password);
$sql="INSERT INTO user( name, email, password,pr) 
VALUES ('$name','$email','$new_password','3')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
	 header("location:../index.php");
// }

?>
