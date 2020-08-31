<?php

require_once('models/commissionModel.php');
include_once('models/userModel.php');
include_once('views/commissionView.php');

class CommissionController {

    private $model;
    private $userModel;
    private $view;

    public function __construct() {
        $this->model = new CommissionModel();
        $this->userModel = new UserModel();
        $this->view = new CommissionView();
    }

    //Muestra la administracion de comisiones
    public function adminCommissions() {
        $commissions = $this->model->getCommissions();
        $users = $this->userModel->getUsers();
        $this->view->adminCommissions($commissions,$users);
    }

    //Agrega una nueva comision
    public function addCommission(){
        if(!empty($_POST['city']) && !empty($_POST['number'])){
            $city = $_POST['city']; 
            $number = $_POST['number']; 
            $this->model->addCommission($city,$number);
        }
        header('Location: ' . "commissions");
    }
}

?>