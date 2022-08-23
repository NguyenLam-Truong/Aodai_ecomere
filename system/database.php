<?php
include 'config.php';
// class kết nối với database
class Database {
    protected $servename = servername;
    protected $username = username;
    protected $password = password;
    protected $dbname = dbname;

    public $conn;    //  biến conn nhận kết nối v

    // phương thức kết nối
    public function ConnectData(){
        $opt = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $this->conn = new PDO(
            'mysql:host='.$this->servename.';dbname='.$this->dbname,
            $this->username, $this->password, $opt
        );
    }
    // query database 
    public function query($sql){ 
        $result = $this->conn->query($sql);
        return $result;
    }
    // query 1 dòng dữ liệu database
    public function queryOne($sql){
        $data = $this->conn->query($sql);
        $result = $data->fetch();
        return $result;
    }
    public function queryOne_assoc($sql){
        $data = $this->conn->query($sql);
        $result = $data->fetchAll();
        return $result;
    }
    // thêm , xóa , sửa dữ liệu database
    public function excute($sql){
        $result = $this->conn->exec($sql);
        return $result;
    }
}
?>