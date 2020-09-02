<?php
require_once('libs/smarty/Smarty.class.php');
include_once('helpers/auth.helper.php');

class MaterialView {

    private $smarty;

    public function __construct() {
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->smarty = new Smarty();
        $this->smarty->assign('username', $username);
        $this->smarty->assign('baseURL', BASE_URL);
    }

    //Construye el html para mostrar el material de estudio
    public function showMaterial($error=null,$material=null,$admin=null,$commission=null){
        $this->smarty->assign('title','Material');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('material', $material);
        $this->smarty->assign('admin', $admin);
        $this->smarty->assign('commission', $commission);
        $this->smarty->display('templates/material.tpl');
    }

    public function showArchive($archive=null,$questions=null,$user=null,$admin=null,$access=null,$commissions=null){
        $this->smarty->assign('title','Material');
        $this->smarty->assign('archive', $archive);
        $this->smarty->assign('questions', $questions);
        $this->smarty->assign('admin', $admin);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('access', $access);
        $this->smarty->assign('commissions', $commissions);
        $this->smarty->display('templates/archive.tpl');
    }
}
?>