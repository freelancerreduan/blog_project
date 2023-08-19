<?php
include('function.php');
$obCreate = new blog_project();

if(isset($_POST['add_info'])){
    $rtn_msg = $obCreate->app_data($_POST);
  }




?>

<div class="container shadow  my-5 bg-body rounded">
  <h2 class="text-danger">Updated Information For Student </h2>
  <form action=" "  method="POST" enctype="multipart/form-data">
  <?php  if(isset($rtn_msg)){ echo "<h5 class = 'text-center text-danger'> $rtn_msg </h5>"; } ?>
    <label for="name" class="form-label">Update Name: </label>
    <input type="text" class="form-control" value="<?php echo $reviceDAta['name'] ?>"  name="u_name">
  
    <label for="number" class="form-label">Update Number</label>
    <input type="number"  class="form-control" value="<?php echo $reviceDAta['phone'] ?>" name="u_phone">
  
    <label for="email" class="form-label">Update Email </label>
    <input type="email"  class="form-control" value="<?php echo $reviceDAta['email'] ?>" name="u_email">
  
    <label class="form-check-label">Please Enter Update Img </label>
    <input type="file"  class="form-control" value=""  name="u_img">
    <img src="upload/<?php echo $reviceDAta['img']; ?>" alt="edite img" class="w-100 img-fluid my-3" style = "width: 50%; height: 90px;" >
    <input type="hidden" value="<?php echo $reviceDAta['id'] ?>" name="idno">
    <button type="submit" class=" btn-warning form-control my-3 " name="u_add_info">Update Information </button>
  </form>
</div>