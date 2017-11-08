<?php

mb_internal_encoding("UTF-8");
mb_http_output( "iso-8859-1" );
ob_start("mb_output_handler");
header("Content-Type: text/html; charset=ISO-8859-1",true);
//header('Content-Type: text/html; charset=utf-8');

require '../../inc/classes/Funcoes_auxiliares.php';
require '../../inc/classes/Cliente.php';
require 'Envia_contato.php';

    $cliente = new Cliente();

    $data = $_POST['contato'];

$cliente->dados['nome']         = $data["inputNome"];
$cliente->dados['email']        = $data["inputEmail"];
$cliente->dados['mensagem']     = $data["mensagem"];
$cliente->dados['telefone']     = Funcoes_auxiliares::limpaEspacosBranco($data["inputTel"]);
$cliente->dados['cad_data']     = $data["inputData"];

//echo json_encode($cliente);

$enviador = substr($cliente->dados['nome'], 0, strpos($cliente->dados['nome'], " "));


// Variável que junta os valores acima e monta o corpo do email

$Vai            = "Data: ".implode("/", array_reverse(explode("-", $cliente->dados['cad_data']))).
                "\n\nNome: ".$cliente->dados['nome']."\n\nTelefone: ".Funcoes_auxiliares::formataTelefone($cliente->dados['telefone']).
                "\n\nE-mail: ".$cliente->dados['email']."\n\nMensagem: ".$cliente->dados['mensagem']."\n";

$cliente->gravarCliente();

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER),
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

$response = [
    "response"
];

 if (Envia_contato::smtpmailer('antonio.wac@gmail.com', $cliente->dados['email'], $enviador, 'Contato de Cliente', $Vai)) {
     //echo "<br>Enviado com sucesso...";
     //$cliente->gravarCliente();
     //echo "<meta http-equiv='Refresh' content='2;URL=./'>"; // Redireciona para uma página.
     $response['response'] = true;
 }else{
     $response['response'] = false;
 }
 //if (!empty($error)) echo $error;

echo json_encode($response);


?>