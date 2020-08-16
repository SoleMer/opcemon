<?php

require_once('controllers/homeController.php');
require_once('controllers/userController.php');
require_once('controllers/adminController.php');

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

//Si $_GET está vacío, le otorga el valor 'home'
if($_GET['action'] == '')
    $_GET['action'] = 'home';

//$urlParts el un array que en cada posición adquiere lo ue está cargado después de cada "/" de la url
$urlParts = explode('/', $_GET['action']);

//Según lo que haya en $urlParts en la posición 0, redirige el sitio a una página diferente
switch ($urlParts[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->showHome();
        break;
    case 'admin':
        $controller = new AdminController();
        $controller->showControl();
        break;
    case 'material':
        break;
    case 'calendario':
        break;
    case 'examenes':
        break;
    case 'login':
        $controller = new UserController();
        $controller->showLogin();
        break;
    case 'register':
        $controller = new UserController();
        $controller->showRegister();
        break;
    case 'addUser':
        $controller = new UserController();
        $controller->addUser();
        break;
    case 'logout':
        $controller = new UserController();
        $controller->logout();
        break;
    default:
        # code...
        break;
}