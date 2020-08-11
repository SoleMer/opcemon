<?php

include_once('models/userModel.php');
include_once('views/userView.php');

class UserController {

    private $model;  
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    //Muestra el formulario de LOGIN
    public function showLogin(){

    }

    //Muestra el formulario de REGISTER
    public function showRegister(){
        $this->view->showRegister();
    }

    // LOGOUT
    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . 'login');
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
            $_SESSION['ADMIN'] = $user->admin;
            //VUELVO AL LISTADO DE PRODUCTOS
            header('Location: ' . "home");
        }
        else {
            //MUESTRO MENSAJE DE ERROR DE LOGIN
            $this->view->showLogin("Login incorrecto");
        }
    }

    //Recibe datos y agrega nuevo usuario.
    public function addUser(){
        //SI LOS DATOS NO ESTAN VACIOS COMPRUEBA QUE LA REPETICION DE CONTRASENA SEA CORRECTA
        if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
            if(($_POST['password']) != ($_POST['repassword'])){
                $this->view->showRegister("Las contrasenas no coinciden");
            }
            else{
                //SI LAS CONTRASENAS COINCIDEN SE GUARDAN LOS DATOS EN VARIABLES
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];  
                $username = ['name'+'lastname']; 
                $email = $_POST['email']; 
                $DNI = $_POST['DNI'];
                $date = $_POST['date']; 
                $city = $_POST['city'];  
                $pass = $_POST['password'];    
                $hash = password_hash($pass, PASSWORD_DEFAULT);
            }
        }
        //AGREGO EL USUARIO A LA DB
        $this->model->addUser($name,$lastname,$username,$email,$date,$DNI,$city,$hash);
        //OBTENGO LOS DATOS DEL NUEVO USUARIO
        $user = $this->model->getUserByEmail($email);
        //INICIO LA SESION DEL NUEVO USUARIO
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->username;
        $_SESSION['ADMIN'] = $user->admin;
        //VUELVO AL LISTADO DE PRODUCTOS
        header('Location: ' . "home");
    }  