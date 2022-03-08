<?php
include_once '../admin/function/connect.php';
$userid=$_POST['userid'];
$proid=$_POST['proid'];
$quantity=$_POST['num'];

$sql = "UPDATE cart SET quantity= $quantity - 1 WHERE user_id = $userid && pro_id = $proid";
$result = $conn->query($sql);

?>