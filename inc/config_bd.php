<?php

class Sql {

    public $conn;
    //Credenciais do banco de dados
    private $host = "us-cdbr-iron-east-05.cleardb.net";
    private $user = "b308ad5ef68f66";
    private $password = "935e7291";
    private $banco_dados = "heroku_113247004c13731";

    public function __construct(){
        return $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->banco_dados);
    }

    public function query($string_query){

        return mysqli_query($this->conn, $string_query);
    }

    public function __destruct(){

        mysqli_close($this->conn);
    }

    public function select($query){

        $result = $this->query($query);
        $data = array();

        while ($row = mysqli_fetch_array($result)) {

            //Formatar os dados em UTF-8 no caso de conterem carteres especiais
//            foreach ($row as $key => $value) {
//                $row[$key] = utf8_encode($value);
//            }
            array_push($data, $row);
        }

        unset($result);
        return $data;
    }
}

?>