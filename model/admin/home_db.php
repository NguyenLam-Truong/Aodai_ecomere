<?php
// kế thừa của database
require_once ('../../system/database.php');
class db_admin extends  Database{
   public function __construct()
   {
       parent::ConnectData();
   }
   public function list_maloai() {
     $sql = "SELECT * FROM loai_san_pham";
     $result = $this->query($sql);
     return $result;
   }
   public function pagi_maloai($pageNum,$pageSize) {
      $sql = "SELECT * FROM loai_san_pham ORDER BY ngaynhap ASC LIMIT $pageNum,$pageSize";
      $result = $this->query($sql);
      return $result;
   }
   public function count_record() {
      $sql = "SELECT COUNT(*) FROM loai_san_pham";
      $result= $this->queryOne($sql);
      return $result;
   }
}
?>