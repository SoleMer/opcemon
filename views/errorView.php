<?php
require_once('libs/smarty/Smarty.class.php');
include_once('helpers/auth.helper.php');

class ErrorView {

    private $smarty;

    public function __construct() {
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->smarty = new Smarty();
        $this->smarty->assign('username', $username);
        $this->smarty->assign('baseURL', BASE_URL);
    }

    //Construye el html para mostrar la página "home"
    public function showHome($error){
        $this->smarty->assign('title','Error');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/error.tpl');
    }
}
?>