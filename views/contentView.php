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

    //Construye el html para mostrar la página que contiene el material de estudio
    public function showContent($error=null,$commission=null,$permits=null){
        $this->smarty->assign('title','Material');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('commission',$commission);
        $this->smarty->assign('permits', $permits);
        $this->smarty->display('templates/content.tpl');
    }
}
?>