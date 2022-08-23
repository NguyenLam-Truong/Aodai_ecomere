<?php
  // cấu hình bảo mật đầu vào
  define('ARR_Controller',['home','login','cart']);
  $ctrl = 'home';
  if(isset($_GET['ctrl'])==true){
    $ctrl = $_GET['ctrl'];
  }
  if(in_array($ctrl,ARR_Controller)==false) die('Địa chỉ không tồn tại');
  $pathFile = "$ctrl"."_site.php";
  if(file_exists($pathFile)==true){
    header("Location: $pathFile");
  }
?> 