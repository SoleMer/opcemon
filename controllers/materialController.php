<?php

include_once('views/materialView.php');
include_once('models/materialModel.php');
include_once('models/accessModel.php');
include_once('models/userModel.php');
include_once('models/commissionModel.php');
include_once('models/questionModel.php');

class MaterialController {

    private $view;
    private $model;
    private $accessModel;
    private $userModel;
    private $commissionModel;
    private $questionModel;

    public function __construct() {
        $this->view = new MaterialView();
        $this->model = new MaterialModel();
        $this->accessModel = new AccessModel();
        $this->userModel = new UserModel();
        $this->commissionModel = new CommissionModel();
        $this->questionModel = new QuestionModel();
    }

    //Muestra el listado de material de estudio disponible
    public function showMaterial(){
        $material = null;
        $userLogged = AuthHelper::checkLoggedIn();
        if ($userLogged == true) {  //Si el usuario esta logueado
            $permitAdmin = AuthHelper::checkPermits(); //Me fijo si el usuario es administrador
            if ($permitAdmin == true) { //Si es administrador le muestro todo el material
                $allMaterial = $this->model->getAllMaterial(); //Obtengo todo elmaterial
                $this->view->showMaterial(null,$allMaterial,true);
            }else{ //Si no es administrador necesito saber a que material puede acceder
                $userId= AuthHelper::getLoggedId();
                $user = $this->userModel->getUserById($userId);
                $commission = $user->commission;  //Obtengo la comision a la que pertenece el usuario
                $access = $this->accessModel->getAccessForCommission($commission);
                $material = $this->accessModel->getAccessAndMaterial($commission); //Obtengo el material al cual puede acceder el usuario segun su comision  
                $this->view->showMaterial("Solo puede acceder al material de estudio disponible para su comision.
                                        Si se registro recientemete debera esperar a que se le asigne una comision.",
                                        $material,false,$commission);
            }  
        }else{
            $this->view->showMaterial("Necesita estar logueado para acceder al material de estudio.");
        }
    } 

    //Agrega material de esudio a la DB
    public function addMaterial() {
        //Si no se agrego titulo da error
        if (empty($_POST['title'])) {
            $this->errorView->showError("Faltan datos obligatorios");
            die();
        }
        //Si hay titulo lo guarda en una variable y sigue la funcion
        $title = $_POST['title'];
        //pregunta si hay un archivo subido
        if(isset($_FILES['input_name']) && ($_FILES['input_name']['type'] == "archive/pdf" || $_FILES['input_name']['type'] == "archive/word" || $_FILES['input_name']['type'] == "archive/docx")) {
            //Pregunta si hay un link
            if (!empty($_POST['link'])) {
                $link = $_POST['link'];
                //Si hay archivo y link guarda el material en la DB con archivo y link
                $success = $this->model->save($title, $_FILES['input_name']['tmp_name'], $link);
            } else { //Si hay archivo pero no hay link guarda en la DB sin link
            $success = $this->model->save($title, $_FILES['input_name']['tmp_name']);
            }
        }else{ //si no hay archivo pregunta si hay link
            if (!empty($_POST['link'])) {
                $link = $_POST['link'];
                //Si hay link guarda en la DB sin archivo y con link
                $success = $this->model->save($title, null, $link);
        }else{ //Si no hay archivo ni link guarda en la DB el material vacio para ser editado despues
            $success = $this->model->save($title);
        }
        }
        header('Location: ' . "material");
    }

    public function showArchive($id){
        $userLogged = AuthHelper::checkLoggedIn();
        if ($userLogged == true) {  //Si el usuario esta logueado
            $archive= $this->model->getArchive($id);
            $questions = $this->questionModel->getQuestions($id);
            $permitAdmin = AuthHelper::checkPermits(); //Me fijo si el usuario es administrador
            if ($permitAdmin == 1) { //Si es administrador le muestro todo el material
                $access = $this->accessModel->getAccess(); //Obtengo todos los accesos
                $commissions = $this->commissionModel->getCommissions();  //obtengo todas las comisiones
                $this->view->showArchive(null,$archive,$questions,$permitAdmin,$access,$commissions);
                die;
            }else{ //Si no es administrador necesito saber a que material puede acceder
                $userId= AuthHelper::getLoggedId(); 
                $user = $this->userModel->getUserById($userId);
                $commission = $user->commission;  //Obtengo la comision a la que pertenece el usuario
                $commissionsAcepted = $this->accessModel->getAccessForMaterial($id); //Obtengo las comisiones que pueden acceder al archivo
                foreach ($commissionsAcepted as $com) {
                    if ($com->commission == $commission) {
                        $this->view->showArchive(null,$archive,$questions);
                        die;
                    }
                }
                $this->view->showArchive("La comision a la que usted pertenece aun no puede acceder a este archivo.");
                die;
            }  
        }else{
            $this->view->showArchive("Necesita estar logueado para acceder al material de estudio.");
        }
    }

    public function removeAccess($commission,$material){
        $access= $this->accessModel->getAccessForMaterial($archive);
        foreach ($access as $a) {
            if ($a->commission == $commission->id) {
                $this->accessModel->removeAccess($a->id);
            }
        }
        header("Location: " . BASE_URL. 'archive/'.$material);
    }

    public function giveAccess($commission,$material){
        $this->accessModel->addAccess($commission,$material);
        header("Location: " . BASE_URL. 'archive/'.$material);
    }

}
?>