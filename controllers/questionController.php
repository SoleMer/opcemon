<?php


class QuestionController {

    private $view;
    private $model;
    private $replyModel;

    public function __construct() {
        $this->view = new QuestionView();
        $this->model = new QuestionModel();
        $this->replyModel = new ReplyModel();
    }

    public function addQuestion($material,$user){
        $affair = $_POST['affair'];
        $message = $_POST['message'];
        $this->model->addQuestion($affair,$messsage,$material,$user);
        header('Location: '. "archive/".$material);
    }

    public function showQuestion($id){
        $question = $this->model->getQuestion($id);
        $replys = $this->replyModel->getReplys($id);
        $users = getUsers();
        $this->view->showQuestion($question,$replys,$users);
    }

}
?>