<?php
require_once 'models/commentModel.php';
require_once 'api/APIView.php';
require_once 'models/userModel.php';

class ApiController {

    private $model;
    private $view;
    private $userModel;

    public function __construct(){
        $this->model = new CommentModel();
        $this->view = new APIView();
        $this->userModel = new userModel();
    }

    public function grantAccess($params = []){
        $material = $params[':IDM'];
        header('Location: ' . "archive" . $material);
    }
}

?>