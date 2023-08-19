<?php
include_once("class/function.php");
$obj = new blog_project();

// it's variable for dispaly data show
$dataRecive = $obj->display_category();

// DELET korar jonne function
if(isset($_GET['status'])){
    if($_GET['status']='delet'){
        $id = $_GET['id'];
        $msg = $obj-> delete_data($id);
    }
}








?>
<div class="container">
    <div class="shadow normal p-4 my-4">
        <h2 class="text-center text-danger my-3">List & Manage Category</h2>
        <?php  if(isset($msg)){echo $msg; } ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Description</th>
                    <th scope="col">Manage</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($datShow = mysqli_fetch_assoc($dataRecive)) { ?>
                    <tr>
                        <th scope="row"> <?php echo $datShow['id'];  ?> </th>
                        <td> <?php echo $datShow['cat_name'];  ?></td>
                        <td> <?php echo $datShow['cat_des'];  ?></td>
                        <td>
                            <a href="edit_cat_view.php?status=edit&&id=<?php echo $datShow['id']; ?>" class="btn btn-warning">Edite</a>
                            
                            <a href="?status=delet&&id=<?php echo $datShow['id']; ?> " class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>