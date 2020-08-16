<?php
require_once('libs/smarty/Smarty.class.php');
include_once('helpers/auth.helper.php');

class HomeView {

    private $smarty;

    public function __construct() {
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->smarty = new Smarty();
        $this->smarty->assign('username', $username);
        $this->smarty->assign('baseURL', BASE_URL);
    }

    //Construye el html para mostrar la página "home"
    public function showHome($admin=null){
        $this->smarty->assign('title','Home');
        $this->smarty->assign('admin', $admin);
        $this->smarty->display('templates/home.tpl');
    }
}
?>