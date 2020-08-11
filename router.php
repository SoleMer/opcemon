<?php

require_once('controllers/homeController.php');

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
    case 'material':
        break;
    case 'calendario':
        break;
    case 'examenes':
        break;
    case 'login':
        break;
    case 'logout':
        break;
    default:
        # code...
        break;
}