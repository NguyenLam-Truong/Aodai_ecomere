<?php
// gọi database 
class Home {
   public function __construct()
   {
      $act = 'index';
      if(isset($_GET['act'])==true){$act=$_GET['act'];}
      switch($act){
        case 'index':
            $this->index();
            break;
        case 'login':
            break;
      }
   }
   public function index(){
      require_once '../../view/site/home_site.php';
   }
}
$controller = new Home();
?>