<?php

require_once('models/commissionModel.php');
include_once('models/userModel.php');
include_once('views/commissionView.php');
include_once('views/errorView.php');

class CommissionController {

    private $model;
    private $userModel;
    private $view;
    private $error;

    public function __construct() {
        $this->model = new CommissionModel();
        $this->userModel = new UserModel();
        $this->view = new CommissionView();
        $this->error = new ErrorView();
    }

    //Muestra la administracion de comisiones
    public function adminCommissions() {
        $permitAdmin = AuthHelper::checkPermits(); //Pregunta si el usuario es administrador
        if ($permitAdmin == 1) {
            $commissions = $this->model->getCommissions();
            $users = $this->userModel->getUsers();
            $this->view->adminCommissions($commissions,$users);
        }
        else{
            $this->error->error("Sólo los administradores pueden administrar las comisiones.");
        }
    }

    //Agrega una nueva comision
    public function addCommission(){
        $permitAdmin = AuthHelper::checkPermits(); //Pregunta si el usuario es administrador
        if ($permitAdmin == 1) {
            if(!empty($_POST['city']) && !empty($_POST['number'])){
                $city = $_POST['city']; 
                $number = $_POST['number']; 
                $this->model->addCommission($city,$number);
            }
            header('Location: ' . "commissions");
        }
        else{
            $this->error->error("Sólo los administradores pueden administrar las comisiones.")
        }
    }
}

?>