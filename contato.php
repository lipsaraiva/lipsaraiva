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

        $mail->IsSMTP();
        $mail->SMTPDebug = 1;
        $mail->Port = 587; // ou 465
        $mail->Host = "mail.lipsaraiva.com.br";
        $mail->SMTPAuth = true;
        $mail->Username = "contato@lipsaraiva.com.br";
        $mail->Password = "Em@liplip2021";
        $mail->FromName = "Lipsaraiva";
        $mail->FromName = "contato@lipsaraiva.com.br";
        $mail->AddAddress("lipsaraiva@gmail.com", "Lipsaraiva");
        $mail->Subject = "$assunto_email";
        $mail->Body = "<html><body><p><strong>Nome:</strong>$nom</p><p><strong>Telefone: </strong>$tel</p><p><strong>e-mail: </strong>$ema</p><p><strong>Mensagem: </strong>$msg</p></body></html>";

        // $mail->CharSet = 'UTF-8';
        // $mail->SMTPSecure = 'ssl'; 
        // $mail->IsHTML(true);
        // $mail->SetFrom("contato@lipsaraiva.com.br");
        
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









