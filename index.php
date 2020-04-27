<?php
require_once('./communs/connexion.php');
require_once('./app/Router.php');

$router = new Router($base);

$router->reqUrl();