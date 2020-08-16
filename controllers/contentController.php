<?php

include_once('views/contentView.php');

class ContentController {

    private $view;

    public function __construct() {
        $this->view = new contentView();
    }

    //Muestra el contenido
    public function showContent() {
        //Si no hay sesion iniciada no muestra el contenido
        $userLogged = AuthHelper::checkLoggedIn();
        if($userLogged == false){
            $this->view->showContent("Inicie sesi[on para ver el contenido.");
        }else{  //Si hay sesion iniciada, verifica si es un administrador y la comision
            $userCommission = AuthHelper::getUserCommission();
            $permitsAdmin = AuthHelper::checkPermits();
            // Le indica a la vista si la sesion iniciada es de un administrador
            if($permitsAdmin == 1){
                $this->view->showContent(null,null,true);    
            }
            else{ // Sin permisos de administrador, indica la comision a la que el usuario pertenece
                $this->view->showContent(null,$userCommission);
            }
        }
    }

}

?>