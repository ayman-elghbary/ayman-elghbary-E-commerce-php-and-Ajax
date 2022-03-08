
<?php
if(!$_SESSION || $_SESSION['priv_id']<300){
    echo "you didn't have ";
    ?>
    <a href="product.php">

<button 
class="btn btn-warning">Click to Back</button>
</a>
<?php
    exit;
    
}


?>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM center WHERE id=$id";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()) {
 
   ?>

						
<form method="POST" action="function/doEditeProduct.php" enctype="multipart/form-data" >
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?=$row['name'] ?>">
</br>
<label>Count</label>
<input type="number" name="count" class="form-control" value="<?=$row['count'] ?>">
</br>
<label>Description</label>
<textarea style="width:90%;height:300px" name="description" ><?=$row['description'] ?></textarea>
</br>
<label>Cover</label>
<input type="file" multiple="" name="cover[]" class="form-control">
</br>
<label>Price</label>
<input type="text"  name="price" class="form-control" value="<?=$row['price'] ?>">
</br>
<label>Rate</label>
<input type="number"  name="rate" min="0" max="5" class="form-control" value="<?=$row['rate'] ?>">
</br>
<label>Brand</label>
<select name="brand" class="form-control">
    <option style="display:none">choose Brand</option>
<?php
$brandtable=$conn->query("SELECT * FROM brand");
foreach ($brandtable as $brand) {
    ?>
<option value="<?= $brand['id']?>"><?= $brand['name']?></option>
<?php
}
?>
</select>
</br>
<select name="category" class="form-control">
    <option style="display:none">choose Category</option>
<?php
$categorytable=$conn->query("SELECT * FROM category where parent =0");
foreach ($categorytable as $category) {
    ?>
<option value="<?= $category['id']?>"><?= $category['name']?></option>
<?php
}
?>
</select>
</br>
<select name="department" class="form-control">
    <option style="display:none">choose Department</option>
<?php
$departmenttable=$conn->query("SELECT * FROM category where parent !=0");
foreach ($departmenttable as $department) {
    ?>
<option value="<?= $department['id']?>"><?= $department['name']?></option>
<?php
}
?>
</select>
</br>
<input type="hidden" name="id" class="form-control" value="<?= $row['id'];   ?>">
</br>

</br>
<input value="go" type="submit" class="form-control btn btn-primary">

</form>
<?php
}

?>