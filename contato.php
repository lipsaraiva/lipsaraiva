<?php
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/SMTP.php";

ini_set('display_errors', true);
ini_set('default_charset', 'UTF-8');
date_default_timezone_set('America/Sao_Paulo');

if (isset($_POST['submit'])) {
    $nom = strip_tags(trim($_POST['nome']));
    $tel = strip_tags(trim($_POST['telefone']));
    $ema = strtoupper(strip_tags(trim($_POST['email'])));
    $msg = strip_tags(trim($_POST['mensagem']));

    if (($nom != "") || ($msg != "") || ($ema != "")) {
        $assunto_email = "Contato Site Lipsaraiva - " . date('dmYhis');
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        // $mail->SMTPDebug = 2;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = 'mail.lipsaraiva.com.br';
        $mail->SMTPAuth = true;     
        $mail->IsSMTP();
        $mail->isHTML(true);      
        $mail->Port = 587; // ou 465
        $mail->CharSet = 'UTF-8';
        $mail->Username = "contato@lipsaraiva.com.br";
        $mail->Password = "Em@liplip2021";
        $address = "contato@lipsaraiva.com.br";
        $mail->AddAddress($address, "destinatario");
        $mail->From = "contato@lipsaraiva.com.br";
        $mail->Sender = "contato@lipsaraiva.com.br";
        $mail->FromName = "Lipsaraiva"; // Seu nome
        $mail->Subject = $assunto_email;
        $corpoMSG = "<html><body><p><strong>Nome:</strong>$nom</p><p><strong>Telefone: </strong>$tel</p><p><strong>e-mail: </strong>$ema</p><p><strong>Mensagem: </strong>$msg</p></body></html>";
        $mail->MsgHTML($corpoMSG);
        
        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        } else {
            echo "<script>alert('Obrigado pelo seu contato!');history.back();</script>";
            exit;
        }
    } else {
        echo "<script>alert('Preencha os campos do formulário.');history.back();</script>";
        exit;
    }
} else {
    header("Location: index.php");
}


