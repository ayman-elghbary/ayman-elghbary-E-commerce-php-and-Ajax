<?php
include 'connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
$count=$_POST['count'];
$description=$_POST['description'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$category=$_POST['category'];
$department=$_POST['department'];
$rate=$_POST['rate'];
$imgname=[];
foreach ($_FILES['cover']['tmp_name'] as $key => $value) {
    $img_name=$_FILES['cover']['name'][$key];
    $img_size=$_FILES['cover']['size'][$key];
    $img_tmp=$_FILES['cover']['tmp_name'][$key];
    $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
    
    
    // $arrext=array("jpg","png","gif");
    // $extuplad=explode(".",$img_name);
    // $extupladcheck=end($extuplad);
    // if(!in_array($extupladcheck,$arrext)){
    //     echo "img error";
    //     exit();
    // }
    // if($img_size>10000000){
    //     echo "size error";
    //     exit();
    // }
    $new_img_name=time().rand(1,10).$img_name;
    $imgname[]=$new_img_name;
    move_uploaded_file($img_tmp,"../incloude/image/$new_img_name");
    }
 // print_r ($imgname);
    $imp=implode(',',$imgname);
$sql="UPDATE center SET name='$name',count='$count',cover='$imp',description='$description',brand='$brand',category='$category',department='$department',price='$price',rate='$rate'  WHERE id=$id";
$conn->query($sql);

// $sql="UPDATE center SET name='$name',count='$count',description='$description',brand='$brand'  WHERE id=$id";
// $pr=$conn->query($sql);
// if (!$pr) {
// echo $conn->error;}
header("location:../product.php");
?>