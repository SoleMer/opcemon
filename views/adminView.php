<?php
require_once('libs/smarty/Smarty.class.php');
include_once('helpers/auth.helper.php');

class AdminView {

    private $smarty;

    public function __construct() {
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->smarty = new Smarty();
        $this->smarty->assign('username', $username);
        $this->smarty->assign('baseURL', BASE_URL);
    }

    //Construye el html para mostrar la página que contiene el material de estudio
    public function showControl($users,$commissions){
        $this->smarty->assign('title','Administracion');
        $this->smarty->assign('users', $users);
        $this->smarty->assign('commissions',$commissions);
        $this->smarty->display('templates/admin.tpl');
    }
    
}
?>