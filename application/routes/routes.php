<?php


require_once 'autoload.php';


$router = new Router();


$router->get('/', 'HomeController@index');
$router->get('/usuario', 'UsuarioController@index');
$router->get('/usuario/cadastrar', 'UsuarioController@cadastrar');
$router->post('/usuario/salvar', 'UsuarioController@salvar');




$router->get('/usuario/buscar', 'UsuarioController@buscar');


$router->dispatch();
