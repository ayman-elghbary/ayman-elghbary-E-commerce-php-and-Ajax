<?php
if(!$_SESSION || $_SESSION['priv_id']<300){
    echo "you didn't have ";
    ?>
    <a href="category.php">

<button 
class="btn btn-warning">Click to Back</button>
</a>
<?php
    exit;
    
}


?>
						
<form method="POST" action="function/doAddSonCategory.php" enctype="multipart/form-data" >
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="Write Category">
</br>

<select name="parent" class="form-control">
    <option style="display:none">Parent</option>
    <?php 
    $parent=$conn->query("SELECT * FROM category WHERE parent = 0");
    foreach ($parent as $parent) {
    
        ?>
    <option value="<?= $parent['id']?>"><?= $parent['name']?></option>
    <?php
    }
    ?>
</select>
<input value="go" type="submit" class="form-control btn btn-primary">

</form>
