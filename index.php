<?php

require 'inc/Slim-2.x/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// Rota para pagina inicial
$app->get(
    '/',
    function () {
        require_once("view/index.php");
        //require_once 'inc/email/contato_menor.php';
    }
);

// Rota para pagina de serviços
$app->get(
    '/servicos',
    function () {
        require_once("view/servicos.php");
    }
);

// Rota da pagina dos portfolios
$app->get(
    '/portfolio',
    function () {
        require_once("view/portifolio.php");
    }
);

// Rota da pagina de orçamentos
$app->get(
    '/orcamento',
    function () {
        require_once("view/orcamento.php");
    }
);

//Rota envio do formulario de contato pequeno
$app->POST(
    '/contato-menor-:confirmado',
    function ($confirmado) {

        require 'inc/email/contato_menor.php';

    }
);

$app->POST(
    '/contato-maior-:confirmado',
    function ($confirmado) {

    }
);

$app->run();