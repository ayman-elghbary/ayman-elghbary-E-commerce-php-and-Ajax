<?php
include_once '../admin/function/connect.php';
$userid=$_POST['userid'];
$proid=$_POST['proid'];

$productfav=$conn->query("SELECT * FROM favourite where user_id = $userid and pro_id= $proid");
$num=$productfav->num_rows;

if ($num==0)
 {
    $sql = "INSERT INTO favourite( user_id, pro_id, quantity) VALUES ('$userid','$proid',1)";
    $result = $conn->query($sql);
}


?>

