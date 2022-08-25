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
            case "update":
                $this->update();
                break;
        }
    }
    public function add() {
        return "hello";
    }
    public function edit() {
        if(isset($_GET['idmaloai'])==true) {
            $idmaloai = $_GET['idmaloai'];
            $data_edit = $this->db_admin->edit_maloai($idmaloai);
            require_once ('../../view/admin/edit_maloai_admin.php');
        }
    }
    public function update() {

        if(isset($_POST['edit'])==true) {
 
            $name = htmlspecialchars(trim($_POST['name']));
            $id_old = $_POST['id_old'];
           
            $id = settype($_POST['id'],"int");
            $date = $_POST['date_fill'];
            $erro=[];
            if($name === "" && $id === true && $date ==="") {
               header('Location: action_maloai_admin.php?act=edit&idmaloai='.$id_old.'');
            }
            else {
               $this->db_admin->update_maloai($id,$name,$date,$id_old);
               header('Location: home_admin.php?act=maloai');
            }
        }
    }
}

$controller = new handle_ml;
