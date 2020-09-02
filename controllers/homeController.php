<?php

include_once('views/homeView.php');

class HomeController {

    private $view;

    public function __construct() {
        $this->view = new homeView();
    }

    //Muestra el home
    public function showHome() {
        $permitsAdmin = AuthHelper::checkPermits(); //Pregunto si el usuario esadministrador
        if($permitsAdmin ==1){  //Sólo si es administrador va a mostrar el botón para acceder a la administración
            $this->view->showHome(true);
        }
        else{ 
            $this->view->showHome(false);
        }
    }
}

?>