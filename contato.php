<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Poraque Instalções Elétricas</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <!-- This is how you would link your custom stylesheet -->
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/webicons-master/webicons.css" media="screen" title="no title" charset="utf-8">

    <script src="js/vendor/modernizr.js"></script>


  </head>
  <body>
      <div class="row header">
        <div class="large-6 columns logo">
          <div class="large-3 columns">
            <h1><img src="img/logo.png" alt="logo Poraquê"/></h1>
          </div>
          <div class="large-9 columns">
            <h1><p class="empresa">PORAQUÊ</p></h1>
            <h2><p class="empresa2">Instalações Elétricas e Telefônicas LTDA</p></h2>
          </div>
        </div>
        <div class="large-6 columns navegacao">
          <div class="icon-bar four-up">
              <a class="item" href="index.html">
                <img src="css/foundation-icons/svgs/fi-home.svg" >
                <label>Home</label>
              </a>
              <a class="item" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">
                <img src="css/foundation-icons/svgs/fi-bookmark.svg" >
                <label>Serviços</label>
              </a>
              <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                  <li><a href="antena-col.html">Antena Coletiva</a></li>
                  <li><a href="arcondicionado.html">Ar Condicionado</a></li>
                  <li><a href="#">CFTV</a></li>
                  <li><a href="#">Elétrica</a></li>
                  <li><a href="#">Filtro Capacitivo</a></li>
                  <li><a href="#">Telefonia</a></li>
              </ul>
              <a class="item" href="sobre.html">
                <img src="css/foundation-icons/svgs/fi-info.svg" >
                <label>Sobre</label>
              </a>
              <a class="item active" href="contato.html">
                <img src="css/foundation-icons/svgs/fi-mail.svg" >
                <label>Contato</label>
              </a>
            </div>
        </div>
      </div>
      <div class="row">
          <div class="large-12 columns barra">
            <p></p>
          </div>
      </div>
<!--Fim Header-->
        <div class="row">
          <div class="large-6 columns">
            <br>
                <p><strong>Entre em contato conosco e solicite um orçamento sem compromisso!</strong></p>
                <form data-abide id="form1" name="form1" method="post" action="enviarEmail.php">
                  <div class="name-field">
                    <label>
                      <input type="text" name="nome" id="nome" placeholder="Seu Nome" required pattern="[a-zA-Z]+" >
                    </label>
                    <small class="error">Nome é obrigatório</small>
                  </div>
                  <div class="email-field">
                    <label>
                      <input type="email" name="email" id="email" placeholder="Seu Email" required>
                    </label>
                    <small class="error">O email é obrigatório</small>
                  </div>
                  <div>
                      <label>
                      <input type="tel" name="tel" id="tel" placeholder="Seu Telefone" required>
                      </label>
                      <small class="error">Telefone é obrigatório</small>
                  </div>
                  <div>
                    <label>
                      <textarea name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem" rows="6"></textarea>
                    </label>
                  </div>
                  <div class="large-12 columns">
                    <button type="submit">Enviar</button>
                    <?php
                    $msg= $_REQUEST['msg'];
                    ?>
                    <?php if($msg == 'true') {?>
                      <div data-alert class="alert-box alert round">
                        Formulário enviado.
                        <a href="#" class="close">&times;</a>
                      </div>
                    <?php } else {?>
                    <?php }?>
                  </div>
                </form>
          </div>
          <div class="large-6 columns">
                <br>
                <p><strong>Onde Estamos</strong></p>
                <iframe width="450" height="300" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=Pra%C3%A7a%20S%C3
                %A3o%20Jo%C3%A3o%20Berchmarns%20-%20Cordovil%2C%20Rio%20de%20Janeiro
                %20-%20RJ%2C%20Brasil&key=AIzaSyAx7SZko4hVLaxOvOlnRUQ2h9au0uGoF8c"
                allowfullscreen></iframe>

          </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <div class="panel">
                    <div class="row">
                    <div class="large-6 columns">
                        <ul class="lista1">
                            <li><h4>Contatos</h4></li>
                            <li><i class="fi-telephone size-30"></i>(21) 3391-3095</li>
                            <li><i class="fi-mobile size-30"></i>(21) 96762-2595 – Alberto</li>
                            <li><img src="css/foundation-icons/svgs/whatsapp.svg">(21) 96762-2595 – Alberto</li>
                        </ul>
                    </div>
                    <div class="large-6 columns">
                        <br>
                        <br>
                        <ul class="lista1">
                            <li><i class="fi-mail size-30"></i>contato@poraqueintalacoes.com</li>
                            <li><i class="fi-mail size-30"></i>jalbertojesus@poraqueintalacoes.com</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
<!--Fim Section-->

<!--Fim Section2-->
      <footer class="row rodape">
        <div class="large-12 columns">
          <hr/>
          <div class="row">
            <div class="large-6 columns">
              <p>Poraquê Instalações Elétricas e Telefônicas LTDA - Todos os direitos reservados © Desenvolvido por Leandro Ferreira 2015</p>
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="index.html" class="webicon facebook"></a></li>
                <li><a href="index.html" class="webicon googleplus"></a></li>
                <li><a href="index.html" class="webicon wordpress"></a></li>
                <li><a href="contato.html" class="webicon mail"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
<!--Fim Footer-->
      <script src="js/vendor/jquery.js"></script>
      <script src="js/foundation/foundation.js"></script>
      <script src="js/foundation/foundation.abide.js"></script>
      <script src="js/foundation/foundation.dropdown.js"></script>
      <script src="js/foundation/foundation.alert.js"></script>
      <script type="text/javascript">
          $(document).foundation();
      </script>
  </body>
</html>
