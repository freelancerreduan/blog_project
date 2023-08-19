<?php 
    include_once("class/function.php"); 
    $obj = new blog_project();
    if(isset($_POST['add_cat'])){
        $msg = $obj-> add_category($_POST);
    }
?>


<div class="container">
    <h2 class="text-center text-danger">Add Category </h2>
    <div class="shadow normal p-4 my-4">
        <form action="" method="post">
            <?php if (isset($msg)){ echo $msg; } ?>
            <div class="form-group">
                <label class="large ">Category Name</label>
                <input class="form-control py-4" type="text" name="cat_name" placeholder="Add Category Name " />
                
                <label class="large mt-3">Category Description </label>
                <input class="form-control py-4" type="text" name="cat_des" placeholder="Add Category Description " />

                <input type="submit" name="add_cat" value="Add Category" class="btn btn-warning text-center mt-4 btn-block">
            </div>
        </form>
    </div>
</div>