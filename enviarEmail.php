<?php

/*apenas dispara o envio da mensagem caso houver/existir $_POST['enviar']*/

/*abaixo as veriaveis principais, que devem conter em seu formulario*/
$nomeRemetente = $_POST['nomeRemetente'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['mensagem'];

/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/

require 'phpmailer/class.phpmailer.php';
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->setLanguage('pt');

$to = 'poraque@poraqueinstalacoes.com.br, j.alberto@poraqueinstalacoes.com.br, i.cristina@poraqueinstalacoes.com.br, j.ricardo@poraqueinstalacoes.com.br';

$host = 'smtp.poraqueinstalacoes.com.br';
$username = 'caixa@poraqueinstalacoes.com.br';
$password = 'honda2014';
$port = 587;
$secure = false;

$mail->isSMTP();
$mail->Host = $host;
$mail->smtpAuth = true;
$mail->Username = $username;
$mail->Password = $password;
$mail->Port = $port;
$mail->smtpSecure = $secure;


$from = $username;
$fromName = 'Caixa';


$mail->From = $from;
$mail->FromName = $fromName;
$mail->addReplyTo($email, $nomeRemetente);

$mail->addAddress('poraque@poraqueinstalacoes.com.br','Poraque');
$mail->addAddress('j.alberto@poraqueinstalacoes.com.br','Alberto');
$mail->addAddress('i.cristina@poraqueinstalacoes.com.br','Isabel');
$mail->addAddress('j.ricardo@poraqueinstalacoes.com.br','Ricardo');

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 70;

$mail->Subject = 'Contato via site';

$message = "Nome: ".$nomeRemetente."<br/>E-mail: ".$email."<br/>Tel: ".$tel."<br/>Mensagem: ".$msg."";
$mail->Body = $message;

$enviado = $mail->Send();

if($enviado) {
  header('Location: http://poraqueinstalacoes.com.br/contato.php?msg=true');
} else {
  echo 'Erro:'.$mail->ErrorInfo;
}

?>