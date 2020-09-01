<?php

require_once('controllers/homeController.php');
require_once('controllers/userController.php');
require_once('controllers/adminController.php');
require_once('controllers/commissionController.php');
require_once('controllers/materialController.php');

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
    case 'users':
        $controller = new UserController();
        $controller->showUsers();
        break;
    case "permit":
        $controller = new UserController();
        $controller->userPermit($urlParts[1]);
        break;
    case "delete":
        $controller = new UserController();
        $controller->deleteUser($urlParts[1]);
        break;
    case 'commissions':
        $controller = new CommissionController();
        $controller->adminCommissions();
        break;
    case "addCommission":
        $controller = new CommissionController();
        $controller->addCommission();
        break;
    case "asignCommission":
        $controller = new UserController();
        $controller->asignCommission($urlParts[1]);
        break;
    case 'material':
        $controller = new MaterialController();
        $controller->showMaterial();
        break;
    case 'addMaterial':
            $controller = new MaterialController();
            $controller->addMaterial();
            break;
    case 'archive':
        $controller = new MaterialController();
        $controller->showArchive($urlParts[1]);
    case 'removeAccess':
        $controller = new MaterialController();
        $controller->removeAccess($urlParts[1],$urlParts[2]);
    case 'giveAccess':
        $controller = new MaterialController();
        $controller->giveAccess($urlParts[1],$urlParts[2]);
    case 'newQuestion':
        $controller = new QuestionController();
        $controller->addQuestion($urlParts[1],$urlParts[2]);
    case 'question':
        $controller = new QuestionController();
        $controller->showQuestion($urlParts[1]);
    case 'nweReply':
        $controller = new ReplyController();
        $controller->addReply($urlParts[1],$urlParts[2]);
    case 'calendario':
        break;
    case 'examenes':
        break;
    case 'login':
        $controller = new UserController();
        $controller->showLogin();
        break;
    case 'verify':
        $controller = new userController();
        $controller->verify();
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