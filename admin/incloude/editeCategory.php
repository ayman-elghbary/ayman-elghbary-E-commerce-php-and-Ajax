
<?php
$id=$_GET['id'];
$sql="SELECT * FROM category WHERE id=$id";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()) {
 $parent=$row['parent'];
   ?>
<?php
if(!$_SESSION || $_SESSION['priv_id']<300){
    echo "you didn't have ";
    ?>
    <a href="category.php">

    <button 
    class="btn btn-warning">Click to Back</button>
</a>
<?php
    exit();
}

?>
<?php
if ($parent == 0) {
    ?>
    <form method="POST" action="function/doEditeCategory.php" enctype="multipart/form-data" >
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?=$row['name'] ?>">
</br>
<input type="file"multiple="" name="cover" class="form-control" >
</br>
<input type="hidden" name="id" class="form-control" value="<?= $row['id'];   ?>">
</br>

</br>
<input value="go" type="submit" class="form-control btn btn-primary">

</form>
<?php
} else {
   


?>

						
<form method="POST" action="function/doEditeSonCategory.php" enctype="multipart/form-data" >
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?=$row['name'] ?>">
</br>

<input type="hidden" name="id" class="form-control" value="<?= $row['id'];   ?>">
</br>

</br>
<input value="go" type="submit" class="form-control btn btn-primary">

</form>
<?php
}
}

?>