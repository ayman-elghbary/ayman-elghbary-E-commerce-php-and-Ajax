
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
				
<form method="POST" action="function/doAddProduct.php" enctype="multipart/form-data" >
<label>Name</label>
<input type="text" name="name" class="form-control">
</br>
<label>Count</label>
<input type="number" name="count" class="form-control">
</br>
<label>Description</label>
<textarea style="width:90%;height:300px" name="description"></textarea>
</br>
<label>Price</label>
<input type="text" name="price" class="form-control">
</br>
<label>Cover</label>
<input type="file" multiple="" name="cover[]" class="form-control">
</br>

<select name="saller" class="form-control">
    <option style="display:none">Saller</option>
    <?php 
    $session=$_SESSION['login'];
    $sallertable=$conn->query("SELECT * FROM user where name='$session'");
    foreach ($sallertable as $saller) {
    
        ?>
    <option value="<?= $saller['id']?>"><?= $saller['name']?></option>
    <?php
    }
    ?>
</select>

</br>
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
<input value="go" type="submit" class="form-control btn btn-primary">

</form>
