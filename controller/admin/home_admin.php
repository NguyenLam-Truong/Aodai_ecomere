<?php
// tạo class cho ctrl 
require_once ('../../model/admin/home_db.php');
class home {
    protected $db_admin; // biến nhận giá trị của database admin
    public function  __construct() 
    {
       // tạo đối tượng 
       $this->db_admin = new db_admin();
       $act = "index";
       if(isset($_GET['act'])==true){
         $act = $_GET['act'];
       }
       switch($act) {
         case "index":
            require_once ('../../view/admin/home_admin.php');
            break;
         case "maloai":
            $this->maloai();
            break;
       }
    }
    public function maloai() {
          $pageSize = 6;
          $pageNum = 1;
          $startRow = 0;
          if(isset($_GET['pageNum'])==true) {
            $pageNum = $_GET['pageNum'];
          }
          // limit pagi
          $count_data = $this->db_admin->count_record(); // đếm số record trong loại
          $totalRecord = $count_data[0];// lấy phần tử đầu tiên
          $totalSize = ceil($totalRecord/$pageSize); // đưa về số trên
          $from = $pageNum-2;
          if($from < 1) {
            $from = 1;
          }
          $to = $pageNum+2;
          if($to > $totalSize) {
            $to = $totalSize;
          }
          $startRow = ($pageNum - 1) * $pageSize;
          // -------------------- //
          $nextPage = $pageNum + 1;
          $backPage = $pageNum - 1;
          
          // sét dữ liệu 
          $data_list = $this->db_admin->pagi_maloai($startRow,$pageSize);
          require_once ('../../view/admin/maloai_admin.php');
    }
}
$controller = new home();
?>