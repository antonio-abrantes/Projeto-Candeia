<?php

require '../config_bd.php';

class Cliente {

    private  $sql;
    private $DT;
    public $dados = [
        'nome',
        'email',
        'nascimento',
        'telefone',
        'cep',
        'cidade',
        'bairro',
        'logradouro',
        'numero_residencial',
        'complemento_endereco',
        'ponto_referencia'
    ];

    public function __construct(){
        $this->sql = new Sql();
    }

    public function gravarCliente(){
        var_dump($this->sql);
        echo '<br><br>';
        $DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
        $query = "INSERT INTO clientes (nome,email,nascimento,telefone,cep,cidade,bairro,logradouro,numero_residencial,complemento_endereco,ponto_referencia, created_at,updated_at) VALUES ('".$this->dados['nome']."',null,'".$this->dados['email']."','".$this->dados['telefone']."',null,null,null,null,null,null,null,'".$DT->format('Y-m-d H:i:s')."','".$DT->format('Y-m-d H:i:s')."');";
        $this->sql->query($query);
    }

    public function updateCliente(){

    }

    public function deleteCliente(){

    }

    public function setNascimento($nascimento)
    {
        $this->dados['nascimento'] = preg_replace('~.*(\d{2})\/(\d{2})\/(\d{4}).*~', '$3-$2-$1', $nascimento);
    }

    public function setTelefone($telefone)
    {
        $this->dados['telefone'] = preg_replace('~.*\((\d{2})\) (\d{4})\-(\d{4}).*~', '$1$2$3', $telefone);
    }

    public function setCep($cep)
    {
        $this->dados['cep'] = preg_replace('~.*(\d{5})\-(\d{3}).*~', '$1$2', $cep);
    }
}