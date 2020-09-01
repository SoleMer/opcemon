<?php


class ReplyController {

    private $view;
    private $model;

    public function __construct() {
        $this->model = new ReplyModel();
    }

    public function addReply($question,$user){
        $message = $_POST['message'];
        $this->model->addReply($messsage,$question,$user);
        header('Location: '. "question/".$question);
    }

}
?>