<?php

include_once('models/replyModel.php');
include_once('views/errorView.php');

class ReplyController {

    private $error;
    private $model;

    public function __construct() {
        $this->model = new ReplyModel();
        $this->error = new ErrorView();
    }

    //Agrega una respuesta a una pregunta determinada
    public function addReply($question,$user){  //recibo el id de la pregunta y del usuario por parámetro
        $userLogged = AuthHelper::checkLoggedIn();
        if ($userLogged == true){
            $message = $_POST['message'];    //Obtengo el mensaje a travez de POST
            $this->model->addReply($message,$question,$user);  //Guardo en la DB
            header('Location: '. BASE_URL . "question/".$question);
        }
        else{
            $this->error->error("Es necesario estar logueado para responder a los comentarios.");
        }
    }

}
?>