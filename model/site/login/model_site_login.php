<?php
include_once '../../system/database.php';
// tạo đối tượng 
class db_login extends Database {
   public function __construct()
   { 
      parent::ConnectData();
   }
   public function register_account($email,$password,$address,$phone,$username,$name,$avt){
      $sql = "INSERT INTO taikhoan (email,user_password,diachi,soDienThoai,username,hovaten,avatar) VALUE ('$email','$password','$address','$phone','$username','$name','$avt') ";
      $reult = $this->excute($sql);
      return $reult;
   }
   public function get_login($email,$password){
      $sql = "SELECT * FROM taikhoan WHERE email = '$email' AND user_password ='$password'";
      $result = $this->queryOne_assoc($sql);
      return $result;
   }
}
?>