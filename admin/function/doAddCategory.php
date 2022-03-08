<?php
session_start();
include "connect.php";
$name=$_POST['name'];
$img_name = $_FILES['cover']['name'];
$img_tmp_name = $_FILES['cover']['tmp_name'];
$img_size = $_FILES['cover']['size'];

$img_arr = explode(".", $img_name) ;
$img_ext =  end($img_arr);

$allow_ext = array("jpg","png","gif");

if (!in_array($img_ext , $allow_ext)) {
	echo "error ext";
	exit();
}

if ($img_size > 500000) {
	echo "error size";
	exit();
}

$new_img_name = rand(1,10000000). time() . $img_name ; 
move_uploaded_file($img_tmp_name, "../incloude/imagecategory/$new_img_name");
$sql="INSERT INTO category(name, cover)VALUES ('$name','$new_img_name')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
//  header("location:../category.php");
?>