<?php
  define('ARR_ADMIN',['home','sanpham','maloai','taikhoan','cart','binhluan','action_maloai']);
  $ctrl='home';
  if(isset($_GET['ctrl'])==true) {
    $ctrl = $_GET['ctrl'];
  }
  if(in_array($ctrl,ARR_ADMIN)==false) {
    echo "No Direct !";
  }
  $path_file = $ctrl."_admin.php";
  if(file_exists($path_file)==true) {
    header("Location: $path_file");
  }
?>