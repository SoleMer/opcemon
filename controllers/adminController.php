<?php

include_once('views/adminView.php');
include_once('models/userModel.php');
include_once('models/commissionModel.php');
include_once('views/errorView.php');

class AdminController {

    private $view;
    private $userModel;
    private $commissionModel;
    private $error;

    public function __construct() {
        $this->view = new AdminView();
        $this->userModel = new UserModel();
        $this->commissionModel = new CommissionModel();
        $this->error = new ErrorView();
    }

    //Muestra el panel de administracion
    public function showControl(){
        $permitAdmin = AuthHelper::checkPermits(); //Pregunta si el usuario es administrador
        if ($permitAdmin == 1) {
            $users = $this->userModel->getUsers();
            $commissions = $this->commissionModel->getCommissions();
            $this->view->showControl($users,$commissions);
        }
        else{
            $this->error->error("Sólo los administradores pueden acceder a la administración.");
        }
    }
}

?>