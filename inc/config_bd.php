<?php

class Sql {

    public $conn;

    public function __construct(){
        return $this->conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net", "b308ad5ef68f66", "935e7291", "heroku_113247004c13731");
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