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
        $mail->CharSet = 'UTF-8';
        $mail->IsSMTP(); // enable SMTP 
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "mail.lipsaraiva.com.br"; // "iuri0048.hospedagemdesites.ws";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "contato@lipsaraiva.com.br";
        $mail->Password = "Em@liplip2021";
        $mail->SetFrom("contato@lipsaraiva.com.br");
        $mail->Subject = "$assunto_email";
        $mail->Body = "<html><body><p><strong>Nome:</strong>$nom</p><p><strong>Telefone: </strong>$tel</p><p><strong>e-mail: </strong>$ema</p><p><strong>Mensagem: </strong>$msg</p></body></html>";
        $mail->AddAddress("lipsaraiva@gmail.com");
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









