
  <?php
    $para = "poraque@poraqueinstalacoes.com.br, a.silva@poraqueintalacoes.com.br, i.cristina@poraqueintalacoes.com.br, j.ricardo@poraqueintalacoes.com.br";
    $assunto = "Contato pelo Site";
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $tel = $_REQUEST['tel'];
    $msg = $_REQUEST['mensagem'];
      $mensagem = "<strong>Mensagem de Contato</strong><br><br>";
      $mensagem .= "<br><strong>Nome: </strong>". $nome;
      $mensagem .= "<br><strong>Email: </strong>". $email;
      $mensagem .= "<br><strong>Tel: </strong>". $tel;
      $mensagem .= "<br><strong>Mensagem: </strong>". $msg;
    $headers  = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-Type:text/html; charset=UTF-8'."\n";
    $headers .= 'From: '.$email . "\r\n" .
                'Reply-To: '.$email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    mail($para, $assunto, $mensagem, $headers);
    header('location:contato.php?msg=true');
  ?>
