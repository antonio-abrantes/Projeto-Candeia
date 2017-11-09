<?php

class Banco {

    public $banco;
    //Credenciais do banco de dados
    private $host = "us-cdbr-iron-east-05.cleardb.net";
    private $user = "b308ad5ef68f66";
    private $password = "935e7291";
    private $banco_dados = "heroku_113247004c13731";

    public function __construct(){

        $this->banco = new \PDO('mysql:dbname='.$this->banco_dados.';host='.$this->host, $this->user, $this->password,
            array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            )
        );

        return $this->banco;
    }

}

//$response->setStatus(Response::STATUS_200,
//    "Cadastro realizado com sucesso.");