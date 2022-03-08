<?php
session_start();
include "connect.php";
$name=$_POST['name'];
$count=$_POST['count'];
$description=$_POST['description'];
$price=$_POST['price'];
$brand=$_POST['brand'];
$category=$_POST['category'];
$department=$_POST['department'];
$saller=$_POST['saller'];
$imgname=[];
foreach ($_FILES['cover']['tmp_name'] as $key => $value) {
$img_name=$_FILES['cover']['name'][$key];
$img_size=$_FILES['cover']['size'][$key];
$img_tmp=$_FILES['cover']['tmp_name'][$key];
$img_ext=pathinfo($img_name,PATHINFO_EXTENSION);

// $img_name=$_FILES['cover']['name'];
// $img_size=$_FILES['cover']['size'];
// $img_tmp=$_FILES['cover']['tmp_name'];
 $arrext=array("jpg","png","gif");
 $extuplad=explode(".",$img_name);
$extupladcheck=end($extuplad);
 if(!in_array($extupladcheck,$arrext)){
    echo "img error";
    exit();
}
 if($img_size>10000000){
     echo "size error";
     exit();
 }
$new_img_name=time().rand(1,10).$img_name;
$imgname[]=$new_img_name;
move_uploaded_file($img_tmp,"../incloude/image/$new_img_name");
}
// print_r ($imgname);
$imp=implode(',',$imgname);
$date= date("Y-m-d");
$sql="INSERT INTO center( name, count, cover, description, brand, category,department, price,saller,date)
 VALUES ('$name','$count','$imp','$description','$brand','$category','$department','$price','$saller','$date')";
$pr=$conn->query($sql);
if (!$pr) {
    echo $conn->error;}
  header("location:../product.php");
?>