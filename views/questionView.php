<?php
require_once('libs/smarty/Smarty.class.php');
include_once('helpers/auth.helper.php');

class QuestionView {

    private $smarty;

    public function __construct() {
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->smarty = new Smarty();
        $this->smarty->assign('username', $username);
        $this->smarty->assign('baseURL', BASE_URL);
    }

    //Construye el html para mostrar la página que contiene una pregunta y sus respuestas si las hay
    public function showQuestion($question=null,$replys=null,$users=null,$user_id=null){
        $this->smarty->assign('title','Consulta');
        $this->smarty->assign('question', $question);
        $this->smarty->assign('replys',$replys);
        $this->smarty->assign('users',$users);
        $this->smarty->assign('user_id',$user_id);
        $this->smarty->display('templates/question.tpl');
    }
    
}
?>