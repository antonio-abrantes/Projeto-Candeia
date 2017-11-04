<?php

//var_dump($_POST);

require '../classes/Cliente.php';

    $cliente = new Cliente();
    //var_dump($cliente);

$Nome		= $_POST["inputNome"];	// Pega o valor do campo Nome
$Email		= $_POST["inputEmail"];	// Pega o valor do campo Email
$Mensagem	= $_POST["mensagem"];	// Pega os valores do campo Mensagem
$Telefone       = $_POST["inputTel"];  //Pega numero do telafone

     $cliente->dados['nome'] = $Nome;
     $cliente->dados['email'] = $Email;
     $cliente->dados['telefone'] = $Telefone;

     var_dump($cliente);

     $cliente->gravarCliente();


//
//// Variável que junta os valores acima e monta o corpo do email
//
//$Vai 		= "Nome: $Nome\n\nE-mail: $Email\n\nMensagem: $Mensagem\n";
//
//require_once("phpmailer/class.phpmailer.php");
//
//define('GUSER', '');	// <-- Insira aqui o seu GMail
//define('GPWD', '');		// <-- Insira aqui a senha do seu GMail
//
//function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
//    global $error;
//    $mail = new PHPMailer();
//    $mail->IsSMTP();		// Ativar SMTP
//    $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
//    $mail->SMTPAuth = true;		// Autenticação ativada
//    $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
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
// if (smtpmailer('antonio.wac@gmail.com', 'antonio.wac@gmail.com', 'Nome do Enviador', 'Assunto do Email', $Vai)) {
//
//     echo "enviado com sucesso...";
//     $cliente->dados['nome'] = $Nome;
//     $cliente->dados['email'] = $Email;
//     $cliente->dados['telefone'] = $Telefone;
//     $cliente->gravarCliente();
//     //echo "<meta http-equiv='Refresh' content='2;URL=../../index.php'>"; // Redireciona para uma página de obrigado.
//
//
// }
//if (!empty($error)) echo $error;
//?>