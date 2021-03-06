<?php

class Funcoes_auxiliares
{

    public static function formataTelefone($telefone){
        $novo = "";

        if(strlen($telefone) >= 11){
            $novo = substr_replace($telefone, '(', 0, 0);
            //$novo = substr_replace($novo, '9', 3, 0);
            $novo = substr_replace($novo, ') ', 3, 0);
        }else{
            $novo = substr_replace($telefone, '(', 0, 0);
            $novo = substr_replace($novo, ') ', 3, 0);
        }

        return $novo;
    }

    public static function limpaEspacosBranco($variavel){
        return implode("", explode(" ", $variavel));
    }

    public static function getTelefoneFormatado($telefone)
    {
        return preg_replace('~.*(\d{2})(\d{4})(\d{4}).*~', '($1) $2-$3', $telefone);
    }

    public static function formataCep($cep){

        $novo = "";
        $novo = substr_replace($cep, '-', 5, 0);

        return $novo;
    }

    public static function formataValor($valor){
        $valor = number_format((float)$valor, 2, '.', '.');
        return $valor;
    }

    public static function condificaStringsUTF8($dados){
        foreach ($dados as $key => $value) {
            $dados[$key] = utf8_encode($value);
        }
        return $dados;
    }

    public static function getCnjpFormatado($cnpj){
        if($cnpj == null)
            return null;
        return preg_replace('~.*(\d{2})(\d{3})(\d{3})(\d{4})(\d{2}).*~', '$1.$2.$3/$4-$5', $cnpj);
    }

    public static function getCpfFormatado($cpf){
        if($cpf == null)
            return null;
        return preg_replace('~.*(\d{3})(\d{3})(\d{3})(\d{2}).*~', '$1.$2.$3-$4', $cpf);
    }

    public static function getDataFormatada($nascimento){

        if($nascimento == null)
            return null;

        return preg_replace('~.*(\d{4})\-(\d{2})\-(\d{2}).*~', '$3/$2/$1', $nascimento);
    }

    public static function setDataFormatada($data)
    {
        return preg_replace('~.*(\d{2})\/(\d{2})\/(\d{4}).*~', '$3-$2-$1', $data);
    }

}