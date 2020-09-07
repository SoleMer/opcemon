<?php

include_once('views/materialView.php');
include_once('models/materialModel.php');
include_once('models/accessModel.php');
include_once('models/userModel.php');
include_once('models/commissionModel.php');
include_once('models/questionModel.php');
include_once('views/errorView.php');

class MaterialController {

    private $view;
    private $model;
    private $accessModel;
    private $userModel;
    private $commissionModel;
    private $questionModel;
    private $error;

    public function __construct() {
        $this->view = new MaterialView();
        $this->model = new MaterialModel();
        $this->accessModel = new AccessModel();
        $this->userModel = new UserModel();
        $this->commissionModel = new CommissionModel();
        $this->questionModel = new QuestionModel();
        $this->error = new ErrorView();
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
                die;
            }else{ //Si no es administrador necesito saber a que material puede acceder
                $userId= AuthHelper::getLoggedId();
                $user = $this->userModel->getUserById($userId);
                $commission = $user->commission;  //Obtengo la comision a la que pertenece el usuario
                $access = $this->accessModel->getAccessForCommission($commission);
                $material = $this->accessModel->getAccessAndMaterial($commission); //Obtengo el material al cual puede acceder el usuario segun su comision  
                $this->view->showMaterial("Solo puede acceder al material de estudio disponible para su comision.
                                        Si se registro recientemete debera esperar a que se le asigne una comision.",
                                        $material,false,$commission);
                die;
            }  
        }else{   //Si no esta logueado muestra error
            $this->error->error("Necesita estar logueado para acceder al material de estudio.");
        }
    } 

    //Agrega material de esudio a la DB
    public function addMaterial() {
        $permitAdmin = AuthHelper::checkPermits(); //Pregunta si el usuario es administrador
        if ($permitAdmin == 1) {
            //Si no se agrego titulo da error
            if (empty($_POST['title'])) {
                $this->errorView->showError("Faltan datos obligatorios");
                die();
            }
            //Si hay titulo lo guarda en una variable y sigue la funcion
            $title = $_POST['title'];
            //pregunta si hay un archivo subido
            if(isset($_FILES['document']) && ($_FILES['document']['type'] == 'application/pdf' || $_FILES['input_name']['type'] == 'application/word' || $_FILES['input_name']['type'] == 'application/docx')) {
                //Pregunta si hay un link
                if (!empty($_POST['link'])) {
                    $link = $_POST['link'];
                    //Si hay archivo y link guarda el material en la DB con archivo y link
                    $success = $this->model->save($title, $_FILES['document']['tmp_name'], $link);
                } else { //Si hay archivo pero no hay link guarda en la DB sin link
                    $success = $this->model->save($title, $_FILES['document']['tmp_ name']);
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
        else{
            $this->error->error('Solo los administradores pueden agregar material de estudio.');
        }
    }

    //Muestra el material de estudio correspondiente al id recibido por parámetro
    public function showArchive($id){
        $userLogged = AuthHelper::checkLoggedIn(); //Pregunto si el usuario está logueado
        if ($userLogged == true) {  //Si el usuario esta logueado
            $user_id = AuthHelper::getLoggedId(); //Pido el id del usuario
            $users = $this->userModel->getUsers();  //Obtengo todos los usuarios
            $archive= $this->model->getArchive($id);  //Obtengo el archivo solicitado
            $questions = $this->questionModel->getQuestions($id); //Obtengo las preguntas para ese material
            $permitAdmin = AuthHelper::checkPermits(); //Me fijo si el usuario es administrador
            if ($permitAdmin == 1) { //Si es administrador le muestro todo el material
                $access = $this->accessModel->getAccess(); //Obtengo todos los accesos
                $commissions = $this->commissionModel->getCommissions();  //obtengo todas las comisiones
                $this->view->showArchive($archive,$questions,$user_id,$permitAdmin,$access,$commissions);
                die;
            }else{  //Si no es administrador necesito saber si puede acceder al material
                if ($this->permitForAccessToMeterial($id) == true) { 
                    $this->view->showArchive($archive,$questions,$user_id);
                    die;
                }
                else{
                    $this->error->error("La comision a la que usted pertenece aun no puede acceder a este archivo.");
                    die;
                }  
            }
        }
        else{
            $this->error->error("Necesita estar logueado para acceder al material de estudio.");
        }
    }

    //Quita el acceso a un material a una comisión seleccionada CORREGIR
    public function removeAccess($commission,$material){
        $permitAdmin = AuthHelper::checkPermits(); //Pregunta si el usuario es administrador
        if ($permitAdmin == 1) { //Si es administrado entra
            /*$access= $this->accessModel->getAccessForMaterial($archive); //Obtengo la lista de accesos al material especificado
            foreach ($access as $a) { //En cada acceso
                if ($a->commission == $commission) { //Se fija si esta la comision
                    $this->accessModel->removeAccess($a->id);
                }
            }*/
            $this->accessModel->removeAccess($commission,$material);
            header("Location: " . BASE_URL. 'archive/'.$material);
        }
        else{ //Si el usuario no es administrador no puede quitar el acceso a ninguna comision
            $this->error->error("Solo los administradores pueden administrar los accesos al material de estudio.");
        }
    }

    //Otorga acceso a una comisión para ver el material
    public function giveAccess($commission,$material){
        $permitAdmin = AuthHelper::checkPermits(); //Pregunta si el usuario es administrador
        if ($permitAdmin == 1) {  //Si es administrador da acceso al material a la comision seleccionada
            $this->accessModel->addAccess($commission,$material); //Agrega el acceso a la DB 
            header("Location: " . BASE_URL. 'archive/'.$material); //Recarga la pagina
        }
        else{ //Si no es administrador no puede dar acceso a otras comisiones
            $this->error->error("Solo los administradores pueden administrar los accesos al material de estudio.");
        }
    }

    //Función que determina si la comisión a la que pertenece el usuario puede acceder al material
    public function permitForAccessToMeterial($idMaterial){
        $userId= AuthHelper::getLoggedId();  //Obtengo el id del usuario 
        $user = $this->userModel->getUserById($userId); //Obtengo todos los datos del usuario
        $commissionsAcepted = $this->accessModel->getAccessForMaterial($idMaterial); //Obtengo las comisiones que pueden acceder al archivo
        foreach ($commissionsAcepted as $com) {
            if ($com->commission == $user->commission) { 
                return true;    //Si puede acceder retorna true
                die;
            }
        }
        return false;   //Si no puede acceder retorna false
    }
}
?>