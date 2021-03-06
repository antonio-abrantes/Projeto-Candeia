<?php

header("Content-Type: text/html; charset=UTF-8");

require '../../inc/classes/Funcoes_auxiliares.php';
require '../../inc/classes/Cliente.php';
require 'Envia_contato.php';

$response = [
    "response"
];

if(isset($_POST) && count($_POST) > 0){

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


    if (Envia_contato::smtpmailer('antonio.wac@gmail.com', $cliente->dados['email'], $enviador, 'Contato de Cliente', $Vai)) {
        //echo "<br>Enviado com sucesso...";
        //$cliente->gravarCliente();
        $response['response'] = true;
    }else{
        $response['response'] = false;
    }
    //if (!empty($error)) echo $error;

    echo json_encode($response);

}else{
    echo "Área restrita...";
    echo "<meta http-equiv='Refresh' content='0;URL=../../'>"; // Redireciona para uma página para o index.php.
}

?>