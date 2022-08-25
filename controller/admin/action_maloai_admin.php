<?php
include_once ('../../app/maloai_admin/ab_maloai_admin.php');
include_once ('../../model/admin/home_db.php');

class handle_ml extends action_maloai {
    public $db_admin;
    public function __construct()
    {
        $this->db_admin = new db_admin;
        $act = "";
        if(isset($_GET['act'])==true) {
            $act = $_GET['act'];
        }
        switch($act) {
            case "edit":
                $this->edit();
                break;
        }
    }
    public function add() {
        return "hello";
    }
    public function edit() {
        echo "hello";
    }
    public function update() {
        return "hello";
    }
}

$controller = new handle_ml;
?>