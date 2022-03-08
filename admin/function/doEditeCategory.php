<?php
include 'connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
$img_name = $_FILES['cover']['name'];
$img_tmp_name = $_FILES['cover']['tmp_name'];
$img_size = $_FILES['cover']['size'];

$img_arr = explode(".", $img_name) ;
$img_ext =  end($img_arr);

$allow_ext = array("jpg","png","gif","jpeg");

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
$sql="UPDATE category SET name='$name',cover='$new_img_name'  WHERE id=$id ";
$conn->query($sql);


// $pr=$conn->query($sql);
// if (!$pr) {
// echo $conn->error;}
header("location:../category.php");
?>