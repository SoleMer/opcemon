<?php

include_once('views/adminView.php');
include_once('models/userModel.php');
include_once('models/commissionModel.php');

class AdminController {

    private $view;
    private $userModel;
    private$commissionModel;

    public function __construct() {
        $this->view = new AdminView();
        $this->userModel = new UserModel();
        $this->commissionModel = new CommissionModel();
    }

    //Muestra el panel de administracion
    public function showControl(){
        $users = $this->userModel->getUsers();
        $commissions = $this->commissionModel->getCommissions();
        $this->view->showControl($users,$commissions);
    }
}

?>