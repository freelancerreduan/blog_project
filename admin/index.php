<?php 
    include_once('class/function.php');
    include_once("incluid/head.php") ;
    $obcreat = new blog_project();
    if(isset($_POST['login'])){
       $datasent = $obcreat->login_func($_POST);
    }

    session_start();
    $id = $_SESSION['idNo'];
    if($id){
        header("location:dashboard.php");
    }
?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <?php if(isset($datasent)){ echo $datasent; } ?>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-4" type="email" name="email" placeholder="Enter email address" />
                                                
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" type="password" name="pass" placeholder="Enter password"/>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" />
                                                    <label class="custom-control-label" >Remember password</label>
                                                </div>
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input class="btn btn-primary" type="submit" name="login" value="Admin Login">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
        <?php include_once("incluid/js.php") ?>
    </body>
</html>
