<?php

require '../../inc/config_bd.php';
require '../../inc/Banco.php';

class Cliente {

    private $sql;
    private $DT;
    public  $dados = [
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
        $this->sql = new Banco();
    }

    public function gravarCliente(){

        $this->sql->banco->beginTransaction();

        $stmt = $this->sql->banco->prepare("INSERT INTO clientes (nome,email,telefone,cad_data, created_at, updated_at) VALUES(:nome, :email, :telefone, :cad_data, :created_at, :updated_at)");

        $this->DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
        $created_at = $this->DT->format('Y-m-d H:i:s');
        $updated_at = $this->DT->format('Y-m-d H:i:s');
        $nome = utf8_encode($this->dados['nome']);

        $stmt->bindValue(":nome", $nome );
        $stmt->bindValue(":email", $this->dados['email'] );
        $stmt->bindValue(":telefone", $this->dados['telefone']);
        $stmt->bindValue(":cad_data", $this->dados['cad_data']);
        $stmt->bindValue(":created_at", $created_at);
        $stmt->bindValue(":updated_at", $updated_at);

        $stmt->execute();
        $this->sql->banco->commit();
    }

    /*
     *Função para gravar no banco antiga
     */
//    public function gravarCliente(){
//        $this->DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
//        $created_at = $this->DT->format('Y-m-d H:i:s');
//        $updated_at = $this->DT->format('Y-m-d H:i:s');
//        $nome = utf8_encode($this->dados['nome']);
//        $query = "INSERT INTO clientes (nome,email,telefone,cad_data, created_at,updated_at) VALUES ('".$nome."','".$this->dados['email']."','".$this->dados['telefone']."', '".$this->dados['cad_data']."' ,'".$created_at."','".$updated_at."');";
//        $this->sql->query($query);
//    }

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