<?php
include_once '../../model/site/login/model_site_login.php';
class Login {
   public $db_login;
   public function __construct()
   {
      // tạo biến db_login
      $this->db_login = new db_login();
      $act = 'index';
      if(isset($_GET['act'])==true) { $act=$_GET['act']; }
      switch ($act) {
        case 'index':
            $this->index();
            break;
        case 'register':
            $this->register();
            break;
        case 'register_account':
            $this->register_account();
            break;   
        case 'redirect_admin':
            $this->header_login();
          break; 
      }
   }


   
   public function index(){
     require_once '../../view/site/login_register/login_site_view.php';
   }
   public function register(){
     require_once '../../view/site/login_register/register_site_view.php';
   }
   public function register_account(){
     // lấy dữ liệu 
     if(isset($_POST['insert_account'])==true){
      // lấy dữ liệu từ form
        $email = $_POST['email_user'];
        $password = md5($_POST['password_user']);
        $re_enterpassword = md5($_POST['re_password_user']);
        $address = $_POST['address_user'];
        $phone = $_POST['phone_user'];
        $username = $_POST['username_user'];
        $name = $_POST['name_user'];
        $avt = $_FILES['avatar_user']['name'];
      // kết thúc lấy dữ liệu
        //  đây là phần upload file ảnh
        $target_dir = '../../public/upload_img/';
        $file = $_FILES['avatar_user']['name'];
        $target_file = $target_dir.basename($file);
        move_uploaded_file($_FILES["avatar_user"]["tmp_name"],$target_file);
        // gọi hàm chèn dữ liệu
        $allow = true; 
        if($password === $re_enterpassword){
           $this->db_login->register_account($email,$password,$address,$phone,$username,$name,$avt);
           header('Location:?act=register');
        }
        else {
           echo '<script>alert("Mật khẩu không trùng nhau !")</script>';
           die();
        }
     }
   }
   public function header_login(){
      header('Location: ../admin/index.php');
   }
}
$controller = new Login();
?>