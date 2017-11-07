<?php

require 'inc/config_bd.php';

class ClienteOrcamento {

    private  $sql;
    private $DT;
    public $dados = [
        'nome',
        'email',
        'cad_data',
        'telefone',
        'mensagem',
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
        $this->DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
        $created_at = $this->DT->format('Y-m-d H:i:s');
        $updated_at = $this->DT->format('Y-m-d H:i:s');

        $query = "INSERT INTO clientes (nome,email,telefone,cad_data, created_at,updated_at) VALUES ('".$this->dados['nome']."','".$this->dados['email']."','".$this->dados['telefone']."', '".$this->dados['cad_data']."' ,'".$created_at."','".$updated_at."');";
        $this->sql->query($query);
    }

}