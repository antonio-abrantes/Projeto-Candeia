<?php

header('Content-Type: text/html; charset=utf-8');

require '../classes/Funcoes_auxiliares.php';
require '../classes/Cliente.php';
require 'Envia_contato.php';

    $cliente = new Cliente();
    //var_dump($cliente);

$cliente->dados['nome']         = $_POST["inputNome"];
$cliente->dados['email']        = $_POST["inputEmail"];
$cliente->dados['mensagem']     = $_POST["mensagem"];
$cliente->dados['telefone']     = Funcoes_auxiliares::limpaEspacosBranco($_POST["inputTel"]);
$cliente->dados['cad_data']     = $_POST["inputData"];

$enviador = substr($cliente->dados['nome'], 0, strpos($cliente->dados['nome'], " "));


// Variável que junta os valores acima e monta o corpo do email

$Vai            = "Data: ".implode("/", array_reverse(explode("-", $cliente->dados['cad_data']))).
                "\n\nNome: ".$cliente->dados['nome']."\n\nTelefone: ".Funcoes_auxiliares::formataTelefone($cliente->dados['telefone']).
                "\n\nE-mail: ".$cliente->dados['email']."\n\nMensagem: ".$cliente->dados['mensagem']."\n";


// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER),
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (Envia_contato::smtpmailer('antonio.wac@gmail.com', $cliente->dados['email'], $enviador, 'Contato de Cliente', $Vai)) {
     echo "Enviado com sucesso...";
     $cliente->gravarCliente();
     echo "<meta http-equiv='Refresh' content='0;URL=../../index.php'>"; // Redireciona para uma página.
 }
 if (!empty($error)) echo $error;

?>