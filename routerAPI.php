<?php
require_once 'libs/router/Router.php';
require_once 'api/ApiController.php';

$router = new Router();

//$router->addRoute('recurso', 'verbo', 'controlador', 'funcion');

//MATERIAL DE ESTUDIO

$router->addRoute('commissions/:IDM/:IDC', 'POST', 'ApiController', 'grantAccess'); //OTORGAR ACCESO A MATERIAL(ID) AUNA COMISION

//COMENTARIOS

/*$router->addRoute('comments/product/:ID', 'GET', 'ApiController', 'getComments'); //obtener todos los comentarios de un producto
$router->addRoute('comments/product/:ID/:ORDER', 'GET', 'ApiController', 'getCommentsOrder'); //obtener todos los comentarios de un producto en orden ascendente o descendente
$router->addRoute('comments/product/:ID', 'POST', 'ApiController', 'addComment'); //agregar un comentario a un producto
$router->addRoute('comments/:ID', 'DELETE', 'ApiController', 'deleteComment');//eliminar un comentario
$router->addRoute('username/:ID', 'GET', 'ApiController', 'getUsername'); */

$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);

?> 