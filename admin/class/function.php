<?php
class blog_project{
    private $conn;
    public function __construct()
    {
        $dbhost ='localhost';
        $dbuser ='root';
        $dbpass ="";
        $dbname ='blog';

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$this->conn){
            die ("<h4> Connection Faild!! </h4>");
        }
    }



    public function login_func($data){
        $email = $data['email'];
        $pass = md5($data['pass']);
        $query = "SELECT * FROM login_info WHERE email= '$email' && pass= '$pass'";

        if(mysqli_query($this->conn , $query)){
            $admin_info = mysqli_query($this->conn , $query);
            $admin_data = mysqli_fetch_assoc($admin_info);
            if($admin_data){
                header("location:dashboard.php");
                session_start();
                $_SESSION['idNo'] = $admin_data['id'];
                $_SESSION['name'] = $admin_data['name'];
                // $_SESSION['idNo'] = $admin_data['id'];

            }else{
                return "login Faild,";
                header("location:index.php");
            }
        } 
        
    }




    
}
?>