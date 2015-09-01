<?php
@ini_set("display_errors", 1);
@ini_set("log_errors", 1);
@ini_set("error_reporting", E_ALL);
$to = "poraque@poraqueinstalacoes.com.br, a.silva@poraqueinstalacoes.com.br, i.cristina@poraqueinstalacoes.com.br, j.ricardo@poraqueinstalacoes.com.br";
$subject = "Contato pelo Site";
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['tel'];
$msg = $_REQUEST['mensagem'];

  $message = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Tel: ".$tel."<br/>Mensagem: ".$msg."";


  $headers  = 'MIME-Version: 1.1'."\r\n";
  $headers .= 'Content-Type:text/html; charset=UTF-8'."\r\n";
  $headers .= 'From: caixa@poraqueinstalacoes.com.br'."\r\n".
              'Reply-To: '.$email . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

              mail ($to, $subject, $message, $headers);

      echo $to."<br>";
      echo $message."<br>";
      echo $headers."<br>";
      echo $subject."<br>";



      header('Location: http://poraqueinstalacoes.com.br/contato.php?msg=true');



?>
