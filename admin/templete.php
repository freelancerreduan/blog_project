<?php 
    include_once('incluid/head.php'); 
    include_once('class/function.php');
    $obj = new blog_project();
    
    session_start();
    $id = $_SESSION['idNo'];
    if($id==null){
        header("location:index.php");
    }

    if(isset($_GET['adminlogout'])){
        if($_GET['adminlogout']=='logout'){
            $obj->logout();
        }
    }




?>
    <body class="sb-nav-fixed">
<?php include_once('incluid/topnave.php'); ?>
        <div id="layoutSidenav">
        <?php include_once('incluid/sideneve.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <?php if(isset($views)){
                            if($views=="dashboard"){
                                include_once('views/desh_view.php');
                            }elseif($views == 'manage_category_view'){
                                include_once('views/manege_category_view.php');
                            }
                            elseif($views == 'manege_post_views'){
                                include_once('views/manege_post_view.php');
                            }
                            elseif($views == 'add_post_views'){
                                include_once('views/add_post_view.php');
                            }
                            elseif($views == 'add_category_views'){
                                include_once('views/add_category_view.php');
                            }
                            elseif($views == 'manege_category_views'){
                                include_once('views/add_post_view.php');
                            }
                        } ?>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    <?php include_once('incluid/js.php'); ?>
    </body>
</html>
