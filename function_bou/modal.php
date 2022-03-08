<?php
include_once '../admin/function/connect.php';
//send data to ajax by json & for loop
// $proid=$_POST['proid'];
// $return_arr = array();

// $query =$conn->query("SELECT * FROM center Where id= $proid");
// while($row=$query->fetch_assoc()){
//     $imgn=$row['cover'];
//     $array=explode(",",$imgn);
   
//     $id = $row['id'];
//     $username = $row['name'];
//     $price = $row['price'];
//     // $ = $row['email'];

//     $return_arr[] = array("id" => $id,
//     "username" => $username,
//     "price" => $price);

//     echo json_encode($return_arr);
// //   print_r($row);


//   }
//send data to ajax by json & Object
$proid=$_POST['proid'];
$return_arr = array();

$query =$conn->query("SELECT * FROM center Where id= $proid");
while($row=$query->fetch_assoc()){
    $imgn=$row['cover'];
    $array=explode(",",$imgn);
   
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];
    $description=$row['description'];
    $pic=$array[0];
    
    // $ = $row['email'];

    $return_arr[] = (object)array("id" => $id,
    "name" => $name,
    "price" => $price,
    "description" => $description,
    "pic" => $pic);

    echo json_encode((object)$return_arr);
    //  print_r($return_arr);
// return $return_arr;

  }
  ?>

