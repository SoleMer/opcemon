<?php

include_once('models/userModel.php');
include_once('views/userView.php');
include_once('views/errorView.php');
include_once('models/commissionModel.php');

class UserController {

    private $model;  
    private $view;
    private $error;
    private $commModel;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->error = new ErrorView();
        $this->commModel = new CommissionModel();
    }

    //Muestra el formulario de LOGIN
    public function showLogin(){
        $userLogged = AuthHelper::checkLoggedIn(); //Pregunto si el usuario está logueado
        if($userLogged == true){   //Si está logueado
            $permitAdmin = AuthHelper::checkPermits();  //Pregunto si es administrador
            if($permitAdmin == 1){
                $this->view->showLogin("Sesion iniciada",$userLogged,$permitAdmin);
            }
            else{
                $this->view->showLogin("Sesion iniciada",$userLogged);
            }
        }
        else{
            $this->view->showLogin();
        }
    }

    //Verifica que el usuario y la contraseña coincidan con las guardadas en la DDBB
    public function verify(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $user = $this->model->getUserByEmail($email);
        }
        $hash = $user->password;
        $response = password_verify($pass, $hash);
        
        if($response == true){
            // INICIO LA SESSIÓN Y LOGUEO AL USUARIO
            session_start();
            $_SESSION['ID_USER'] = $user->id;
            $_SESSION['USERNAME'] = $user->username;
            $_SESSION['PERMITS'] = $user->permits;
            //VUELVO AL LISTADO DE PRODUCTOS
            header('Location: ' . "home");
        }
        else {
            //MUESTRO MENSAJE DE ERROR DE LOGIN
            $this->view->showLogin("Login incorrecto");
        }
    }

    //Muestra el formulario de REGISTRO
    public function showRegister(){
        $this->view->showRegister();
    }

    //Recibe datos y agrega nuevo usuario.
    public function addUser(){
        //SI LOS DATOS NO ESTAN VACIOS COMPRUEBA QUE LA REPETICION DE CONTRASENA SEA CORRECTA
        if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['DNI']) && !empty($_POST['date']) && !empty($_POST['city']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
            //Si la repetici[on de contrasena no coicide vuelve a mostrar el formulario de registro con el mensaje de error
            if(($_POST['password']) != ($_POST['repassword'])){
                $this->view->showRegister("Las contrasenas no coinciden");
            }
            else{
                //SI LAS CONTRASENAS COINCIDEN SE GUARDAN LOS DATOS EN VARIABLES
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];  
                $arrayUsername = [$name." ".$lastname]; 
                $username = implode(" ", $arrayUsername);
                $email = $_POST['email']; 
                $DNI = $_POST['DNI'];
                $date = $_POST['date']; 
                $city = $_POST['city'];  
                $pass = $_POST['password'];    
                $hash = password_hash($pass, PASSWORD_DEFAULT);
            } //FALTA CONTROLAR QUE NO SE AGREGUEN DOS USUARIOS IGUALES
            //AGREGO EL USUARIO A LA DB
            $this->model->addUser($name,$lastname,$username,$email,$date,$DNI,$city,$hash);
            //OBTENGO LOS DATOS DEL NUEVO USUARIO
            $user = $this->model->getUserByEmail($email);
            //INICIO LA SESION DEL NUEVO USUARIO
            //session_start();
            $_SESSION['ID_USER'] = $user->id;
            $_SESSION['USERNAME'] = $user->username;
            $_SESSION['PERMITS'] = $user->permits;
            var_dump("agregado");
            die;
            //VUELVO AL INICIO
            //header('Location: ' . "home");
        }
        else{
            $this->view->showRegister("Por favor, complete todos los datos.");
        }
    }

    // CERRAR SESION
    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . 'login');
    }

    //Muestra la lista de usuarios
    public function showUsers(){
        $permitAdmin = AuthHelper::checkPermits();
        if ($permitAdmin == 1) {
            $users = $this->model->getUsers();
            $this->view->showUsers($users);
            die;
        }
        else {
            $this->view->showUsers(null,"Sólo los administradores pueden acceder a la administración.");
        }
    }
    
    //otorga o quita permisos de administrador a un usuario recibido por parametro
    public function userPermit($idUser){
        $permitAdmin = AuthHelper::checkPermits();
        if ($permitAdmin == 1) {
            $user= $this->model->getUserById($idUser);
            $admin= $user->permits;
            if ($admin == 0) {
                $admin = 1;
            }
            else{
                $admin = 0;
            }
            $this->model->changePermitAdmin($user->id, $admin);
            header("Location: " . BASE_URL. 'users');
        }
        else{
            $this->view->showUsers(null,"Sólo los administradores pueden acceder a la administración.");
        }
    }

    //Elimina un usuario
    public function deleteUser($id){
        $permitAdmin = AuthHelper::checkPermits();
        if ($permitAdmin == 1) {
            $this->model->deleteUser($id);
            header("Location: ". BASE_URL. 'users');
        }
        else{
            $this->view->showUsers(null,"Sólo los administradores pueden acceder a la administración.");
        }
    }

    //ASIGNA UNA NUEVA COMISION AL USUARIO
    public function asignCommission($id){
        $permitAdmin = AuthHelper::checkPermits();
        if ($permitAdmin == 1) {
            $commission = $_POST['commission'];
            $this->model->asignCommission($id, $commission);
            header("Location: ". BASE_URL. 'commissions');
        }
        else{
            $this->view->showUsers(null,"Sólo los administradores pueden acceder a la administración.");
        }
    }

    //Muestra el perfil del usuario
    public function showPerfil(){
        $userLogged = AuthHelper::checkLoggedIn(); //Pregunto si el usuario está logueado
        if($userLogged == true){   //Si está logueado
            $id = AuthHelper::getLoggedId();
            $user = $this->model->getUserById($id);
            $commission = $this->commModel->getCommission($user->commission);
            $this->view->showPerfil($user,$commission);
        }
        else{
            $this->error->error("Debe iniciar sesion para acceder a su perfil.");
        }
    }

    //Muestra el formulario de edicion d3l perfil actual
    public function editPerfil(){
        $userLogged = AuthHelper::checkLoggedIn(); //Pregunto si el usuario está logueado
        if($userLogged == true){   //Si está logueado
            $id = AuthHelper::getLoggedId();
            $user = $this->model->getUserById($id);
            $this->view->editPerfil($user);
        }
        else{
            $this->error->error("Debe iniciar sesion para editar su perfil.");
        }
    }

    //Edito el usuario en la DB
    public function editUser($id){
        $user= $this->model->getUserById($id);
        if (empty($_POST['date'])){
            $date= $user->date;
        }else{
            $date = $_POST['date'];
        }
        if (empty($_POST['DNI'])){
            $DNI= $user->DNI;
        }else{
            $DNI = $_POST['DNI'];
        }
        if (empty($_POST['email'])) {
            $email= $user->email;
        }else{
            $email = $_POST['email'];
        }
        if (empty($_POST['city'])) {
            $city= $user->city;
        }else{
            $city = $_POST['city'];
        }
        /*if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" 
            || $_FILES['input_name']['type'] == "image/png") {
            $success = $this->model->editUser($id, $date, $DNI, $email, $city, $_FILES['input_name']['tmp_name']);
        } else {*/          //AGREGAR FOTO DE PERFIL??
            $success = $this->model->editUser($id, $date, $DNI, $email, $city);
        //}
        if($success)
            header("Location: ". BASE_URL. 'perfil');
        else{
            $this->error->error("No se pudo editar el perfil. Comunicate con un administrador.");
        }
    }

}
?>  