<?php

header('Content-Type: text/html; charset=utf-8');

require '../classes/Funcoes_auxiliares.php';
require '../classes/Cliente.php';

    $cliente = new Cliente();
    //var_dump($cliente);

$cliente->dados['nome']         = $_POST["inputNome"];
$cliente->dados['email']        = $_POST["inputEmail"];
$cliente->dados['mensagem']     = $_POST["mensagem"];
$cliente->dados['telefone']     = Funcoes_auxiliares::limpaEspacosBranco($_POST["inputTel"]);
$cliente->dados['cad_data']     = $_POST["inputData"];

$enviador = substr($cliente->dados['nome'], 0, strpos($cliente->dados['nome'], " "));


//// Variável que junta os valores acima e monta o corpo do email
//
//$Vai            = "Data: ".implode("/", array_reverse(explode("-", $cliente->dados['cad_data']))).
//                "\n\nNome: ".$cliente->dados['nome']."\n\nTelefone: ".Funcoes_auxiliares::formataTelefone($cliente->dados['telefone']).
//                "\n\nE-mail: ".$cliente->dados['email']."\n\nMensagem: ".$cliente->dados['mensagem']."\n";
//
//require_once("phpmailer/class.phpmailer.php");
//
//define('GUSER', '');	// <-- Insira aqui o seu GMail
//define('GPWD', '');		// <-- Insira aqui a senha do seu GMail
//
//function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
//    global $error;
//    $mail = new PHPMailer();
//    $mail->IsSMTP();		        // Ativar SMTP
//    $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
//    $mail->SMTPAuth = true;		// Autenticação ativada
//    $mail->SMTPSecure = 'ssl';	        // SSL REQUERIDO pelo GMail
//    $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
//    $mail->Port = 465;  		// A porta 587 ou 465 deverá estar aberta em seu servidor
//    $mail->Username = GUSER;
//    $mail->Password = GPWD;
//    $mail->SetFrom($de, $de_nome);
//    $mail->Subject = $assunto;
//    $mail->Body = $corpo;
//    $mail->AddAddress($para);
//    if(!$mail->Send()) {
//        $error = 'Mail error: '.$mail->ErrorInfo;
//        return false;
//    } else {
//        $error = 'Mensagem enviada!';
//        return true;
//    }
//}
//
//// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER),
////o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.
//
// if (smtpmailer('antonio.wac@gmail.com', $cliente->dados['email'], $enviador, 'Contato de Cliente', $Vai)) {

     echo "enviado com sucesso...";
     $cliente->gravarCliente();
     echo "<meta http-equiv='Refresh' content='0;URL=../../index.php'>"; // Redireciona para uma página de obrigado.
// }
//if (!empty($error)) echo $error;
?>