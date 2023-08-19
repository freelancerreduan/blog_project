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
// =================================================================================================================

    // login system
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
            }else{
                return "login Faild,";
                header("location:index.php");
            }
        } 
        
    }
    // logout system
    public function logout(){
        unset($_SESSION['idNo']);
        unset($_SESSION['name']);
        header("location: index.php");
    }
// ==================================================================================================================
    // add category 
    public function add_category($data){
        $add_cat = $_POST['cat_name'];
        $add_des = $_POST['cat_des'];
        $query = "INSERT INTO add_cat(cat_name,cat_des) VALUE ('$add_cat','$add_des')";
        if(mysqli_query($this->conn , $query)){
            return ('Category Added Successfully');
        }
    }

    // catagory display 
    public function display_category(){
        $query = "SELECT * FROM add_cat";
        if(mysqli_query($this->conn , $query)){
            $returndata = mysqli_query($this->conn , $query);
            return $returndata;
        }
    }


    // it's function for ( deleted ) data 
    public function delete_data($id){
        $query = "DELETE FROM add_cat WHERE id=$id";
        if(mysqli_query($this->conn , $query)){
            return "Deleted Successfully";
        }
    }







    
    
    public function update_data($data){
        $name = $data['u_name'];
        $number = $data['u_phone'];
        $email = $data['u_email'];
        $idno = $data['idno'];
        // img upload code
        $img = $_FILES['u_img']['name'];
        $tmp_name =$_FILES['u_img']['tmp_name'];
        
        $query = "UPDATE user SET name ='$name' , phone = $number, email ='$email', img='$img'  WHERE id= $idno";

        if(mysqli_query($this->conn, $query)){
            move_uploaded_file($tmp_name , "upload/".$img);
            return "Information Updated Successfully";
        }
    }

    
}
?>