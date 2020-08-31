<?php
require_once('libs/smarty/Smarty.class.php');
include_once('helpers/auth.helper.php');

class CommissionView {
 
   private $smarty;

   public function __construct() {
      $authHelper = new AuthHelper();
      $username = $authHelper->getLoggedUserName();
      $this->smarty = new Smarty();
      $this->smarty->assign('username', $username);
      $this->smarty->assign('baseURL', BASE_URL);
   }

   //Construye el html para mostrar la administracion de comisiones
   public function adminCommissions($commissions,$users){
      $this->smarty->assign('title','Login');
      $this->smarty->assign('commissions', $commissions);
      $this->smarty->assign('users', $users);
      $this->smarty->display('templates/commissions.tpl');
   }
}
?>