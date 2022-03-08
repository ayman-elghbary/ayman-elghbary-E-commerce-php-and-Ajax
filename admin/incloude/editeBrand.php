
<?php
$id=$_GET['id'];
$sql="SELECT * FROM brand WHERE id=$id";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()) {
 
   ?>
<?php
if($_SESSION['priv_id']<300){
    echo "you didn't have ";
    ?>
    <a href="brand.php">

    <button 
    class="btn btn-warning">Click to Back</button>
</a>
<?php
    exit();
}

?>


						
<form method="POST" action="function/doEditeBrand.php" enctype="multipart/form-data" >
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

?>