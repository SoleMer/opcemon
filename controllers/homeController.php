<?php

include_once('views/homeView.php');

class HomeController {

    private $view;

    public function __construct() {
        $this->view = new homeView();
    }

    //Muestra el home
    public function showHome() {
        $this->view->showHome();
    }

}

?>