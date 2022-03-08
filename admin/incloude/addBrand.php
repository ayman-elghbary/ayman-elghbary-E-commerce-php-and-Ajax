
<?php
if(!$_SESSION || $_SESSION['priv_id']<300){
    echo "you didn't have ";
    ?>
    <a href="brand.php">

<button 
class="btn btn-warning">Click to Back</button>
</a>
<?php
    exit;
    
}


?>
						
<form method="POST" action="function/doAddBrand.php" enctype="multipart/form-data" >
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="Write Brand">

<input value="go" type="submit" class="form-control btn btn-primary">

</form>
