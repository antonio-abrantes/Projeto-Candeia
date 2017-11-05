<?php

require_once("../email/phpmailer/class.phpmailer.php");

class Envia_contato{

    private static $GUSER = ''; //<-- Insira aqui o seu GMail
    private static $GPWD = '';  // <-- Insira aqui a senha do seu GMail

    public static function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {

    global $error;
    $mail = new PHPMailer();
    $mail->IsSMTP();		        // Ativar SMTP
    $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true;		// Autenticação ativada
    $mail->SMTPSecure = 'ssl';	        // SSL REQUERIDO pelo GMail
    $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
    $mail->Port = 465;  		// A porta 587 ou 465 deverá estar aberta em seu servidor
    $mail->Username = self::$GUSER;
    $mail->Password = self::$GPWD;
    $mail->SetFrom($de, $de_nome);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo;
        return false;
    } else {
        $error = 'true';
        return true;
    }
}

}