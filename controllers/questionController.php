<?php

include_once('views/questionView.php');
include_once('models/questionModel.php');
include_once('models/replyModel.php');
include_once('models/userModel.php');
include_once('controllers/materialController.php');
include_once('views/errorView.php');

class QuestionController {

    private $view;
    private $model;
    private $replyModel;
    private $userModel;
    private $materialController;
    private $error;

    public function __construct() {
        $this->view = new QuestionView();
        $this->model = new QuestionModel();
        $this->replyModel = new ReplyModel();
        $this->userModel = new UserModel();
        $this->materialController =New MaterialController();
        $this->error = new ErrorView();
    }

    //Agregar una pregunta o tema de discusión sobre un material específico
    public function addQuestion($material,$user){ //CORROBORAR QUE NO VENGAnN DATOS VACIOS
        $userLogged = AuthHelper::checkLoggedIn();
        if ($userLogged == true){
            $affair = $_POST['affair'];  //Obtengo el asunto
            $message = $_POST['message'];  //Obtengo el mensaje
            $this->model->addQuestion($affair,$message,$material,$user);
            header("Location: " . BASE_URL. 'archive/'.$material);  //Vuelvo a cargar la vista del material agregando la pregunta
        }
        else{
            $this->error->error("Debes estar logueado para comentar.");
        }
        }

    //Abre la vista de un tema de discusión y se visualizan las respuestas
    public function showQuestion($id){
        $userLogged = AuthHelper::checkLoggedIn();   //Pregunto si el usuario está logueado
        $question = $this->model->getQuestion($id);   //Obtengo la pregunta
        if ($userLogged == true) {  //Si el usuario esta logueado necesito saber si puede acceder al material
            if ($this->materialController->permitForAccessToMeterial($question->id_material) == true) { //corroboro
                $replys = $this->replyModel->getReplys($id);  //Si puede acceder obtengo las respuestas a esa pregunta
                $users = $this->userModel->getUsers();  //Obtengo todos los usuarios
                $user_id = AuthHelper::getLoggedId();  //Obtengo el id del usuario logueado
                $this->view->showQuestion($question,$replys,$users,$user_id); //MUESTRO
                die;
            }
            else{  //Si no puede acceder muestro el error
                $this->error->error("La comision a la que usted pertenece no puede acceder a este material.");
                die;
            }
        }else{   //Si no está logueado muestro el error
            $this->error->error("Necesita estar logueado y pertenecer a una comision para acceder al material.
                        Si se logueo recientemente debera esperar a que un administrador le asigne una commission.");
        }
    }

}
?>