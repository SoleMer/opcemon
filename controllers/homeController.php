<?php

include_once('views/homeView.php');

class HomeController {

    private $view;

    public function __construct() {
        $this->view = new homeView();
    }

    //Muestra el home
    public function showHome() {
        $userLogged = AuthHelper::checkLoggedIn();
        if($userLogged == true){
            $permitsAdmin = AuthHelper::checkPermits();
            if($permitsAdmin ==1){
                $this->view->showHome(true);
            }
            else{
            $this->view->showHome(false);
            }
        }else{ 
            $this->view->showHome(false);
        }
    }
}

?>