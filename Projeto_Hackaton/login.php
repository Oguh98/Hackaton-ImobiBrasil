<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Hugo Fernando">


  <link rel="stylesheet" type="text/css" href="./css/glide.theme.min.css">
  <link rel="stylesheet" type="text/css" href="./css/glide.core.min.css">
  <link rel="stylesheet" type="text/css" href="./css/identificacao.css">
  <link rel="stylesheet" type="text/css" href="./css/config.css">
  <link rel="stylesheet" type="text/css" href="./css/rwdgrid.css">
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">

  <link rel="shortcut icon" href="https://www.imobbrasil.com.br/imobiliarias/imagens/imobibrasil.ico">

  <title>Login - ImobiBrasil</title>
</head>

<body>
  <div class="login__corpo" loading="lazy">

    <div class="grid-6 login__corpo__esquerda">
      <div class="login__corpo__esquerda__interno">

        <div class="login__corpo__esquerda__image__placeholder text-start"><a><img src="logo-imobibrasil.svg" alt="imobibrasil"></a></div>

        <h2 class="login__corpo__esquerda__titulo text-start ">Olá,<br> Seja bem-vindoooo</h2>

        <form name="form_ident" id="form_ident" method="post" action="" onsubmit="return valida_ident();">
          <div><input name="login" type="text" id="login" minlength="4" maxlength="150" value="" class="campo" placeholder="Usuário" required=""></div>
          <div class="mb-4"><input name="senha" type="password" class="campo" id="senha" minlength="4" maxlength="50" placeholder="Senha" required=""></div>

          <input name="btnenv" type="submit" border="0" class="btenviar" value="">
        </form>


        <p class="login__corpo__esquerda__interno__alterar__senha text-start"><a href="http://www.imobibrasil.com.br/contato.php" target="_blank">Não consegue acessar o sistema? <strong>Entre em contato.</strong></a></p>



        <p class="login__corpo__esquerda__interno__alterar__ip text-start">
          Identificaãão na pãgina, IP: 201.74.160.136, 01/03/2023 - 09:08:18<br>ImobiBrasil - Todos os Direitos Reservados
        </p>
      </div>
    </div>

    <div class="grid-6 login__corpo__direita">
      <div class="login__corpo__direita__interna__placeholder">
        <div class="login__corpo__direita__interna__placeholder__titulo">
          <h2 class="login__corpo__direita__interna__titulo">Acompanhe nosso conteúdo:</h2>
        </div>

        <div class="login__corpo__direita__interna card-group glide glide--ltr glide--carousel glide--swipeable">
          <div class="glide__track" data-glide-el="track">
            <div class="glide__slides" style="transition: transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 3630px; transform: translate3d(-1372.5px, 0px, 0px);">
              <div class="card glide__slide glide__slide--clone" style="width: 427.5px; margin-right: 15px;">
                <img src="./img/ident-banner4.jpg" class="card-img-top">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Blog</span> Google Meu Negócio para Corretores e Imobiliárias</h2>
                  <p class="mt-2 mb-2 card-text">Desmistifique o uso do Google meu negócio e aproveite todo o poder da ferramenta.</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.imobibrasil.com.br/blog/google-meu-negocio-corretores-imobiliarias/" class="btn btn-primary"><i class="fa fa-wordpress"></i> Ler Artigo</a>
                    <a target="_blank" href="https://www.imobibrasil.com.br/blog/" class="btn btn-primary"><i class="fa fa-rss"></i> Blog</a>

                  </div>
                </div>
              </div>
              <div class="card glide__slide glide__slide--clone" style="width: 427.5px; margin-left: 15px; margin-right: 15px;">
                <img src="./img/ident-banner3.jpg" class="card-img-top">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Dicas</span> Motivos para a presenãa digital</h2>
                  <p class="mt-2 mb-2 card-text">Por que o corretor de imãveis precisa estar nas redes sociais?</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.youtube.com/watch?v=O1hwOdhya5M" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Youtube</a>
                    <a target="_blank" href="https://www.instagram.com/imobibrasil/" class="btn btn-primary"><i class="fa fa-instagram"></i> Instagram</a>

                  </div>
                </div>
              </div>
              <div class="card glide__slide" style="width: 427.5px; margin-left: 15px; margin-right: 15px;">
                <img src="./img/ident-podcast_13-lauriana.jpg" class="card-img-top">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Nossa_Sala</span> Advogada e Incorporadora, Lauriana Almeida</h2>
                  <p class="mt-2 mb-2 card-text">Administradora do edifãcio Sunset Home Club em Presidente Epitãcio.</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.youtube.com/watch?v=h8piG8wyo7k" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Youtube</a>
                  </div>
                </div>
              </div>

              <div class="card glide__slide glide__slide--active" style="width: 427.5px; margin-left: 15px; margin-right: 15px;">
                <img src="./img/ident-podcast_14-adriana.jpg" class="card-img-top" alt="14">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Nossa_Sala</span> Arquiteta e Empreendedora, Adriana Mello</h2>
                  <p class="mt-2 mb-2 card-text">Arquiteta e proprietãria do escritãrio Adriana Mello Arquitetura.</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.youtube.com/watch?v=8tp_ABSEkWI" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Youtube</a>
                  </div>
                </div>
              </div>


              <div class="card glide__slide" style="width: 427.5px; margin-left: 15px; margin-right: 15px;">
                <img src="./img/ident-banner4.jpg" class="card-img-top">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Blog</span> Google Meu Negãcio para Corretores e Imobiliãrias</h2>
                  <p class="mt-2 mb-2 card-text">Desmistifique o uso do Google meu negãcio e aproveite todo o poder da ferramenta.</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.imobibrasil.com.br/blog/google-meu-negocio-corretores-imobiliarias/" class="btn btn-primary"><i class="fa fa-wordpress"></i> Ler Artigo</a>
                    <a target="_blank" href="https://www.imobibrasil.com.br/blog/" class="btn btn-primary"><i class="fa fa-rss"></i> Blog</a>

                  </div>
                </div>
              </div>

              <div class="card glide__slide" style="width: 427.5px; margin-left: 15px; margin-right: 15px;">
                <img src="./img/ident-banner3.jpg" class="card-img-top">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Dicas</span> Motivos para a presenãa digital</h2>
                  <p class="mt-2 mb-2 card-text">Por que o corretor de imãveis precisa estar nas redes sociais?</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.youtube.com/watch?v=O1hwOdhya5M" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Youtube</a>
                    <a target="_blank" href="https://www.instagram.com/imobibrasil/" class="btn btn-primary"><i class="fa fa-instagram"></i> Instagram</a>

                  </div>
                </div>
              </div>

              <div class="card glide__slide glide__slide--clone" style="width: 427.5px; margin-left: 15px; margin-right: 15px;">
                <img src="./img/ident-podcast_13-lauriana.jpg" class="card-img-top">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Nossa_Sala</span> Advogada e Incorporadora, Lauriana Almeida</h2>
                  <p class="mt-2 mb-2 card-text">Administradora do edifãcio Sunset Home Club em Presidente Epitãcio.</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.youtube.com/watch?v=h8piG8wyo7k" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Youtube</a>
                  </div>
                </div>
              </div>
              <div class="card glide__slide glide__slide--clone" style="width: 427.5px; margin-left: 15px;">
                <img src="./img/ident-podcast_14-adriana.jpg" class="card-img-top" alt="14">
                <div class="card-body">
                  <h2 class="mt-2 mb-2 card-title text-success"><span>#Nossa_Sala</span> Arquiteta e Empreendedora, Adriana Mello</h2>
                  <p class="mt-2 mb-2 card-text">Arquiteta e proprietãria do escritãrio Adriana Mello Arquitetura.</p>
                  <div class="mt-2 card-footer">
                    <a target="_blank" href="https://www.youtube.com/watch?v=8tp_ABSEkWI" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Youtube</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet glide__bullet--active" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
          </div>
        </div>

        <div class="login__corpo__direita__interna__rodape">
          <p>Ainda não tem um SITE + CRM?</p>
          <a href="https://www.imobibrasil.com.br/contrateja.php" target="_blank"><button class="btn btn-outline">TESTE POR 7 DIAS GRãTIS</button></a>
          <p>Apenas R$ 39,99/mês (Plano Simples)</p>
        </div>
      </div>

    </div>
  </div>
  <script src="/glide.min.js.download"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var glide = new Glide('.glide', {
        type: 'carousel',
        perView: 2,
        autoplay: 5000,
        gap: 30,
        breakpoints: {
          1200: {
            perView: 1
          },
        }
      });
      glide.mount();
    });
  </script>
  <script language="JavaScript">
    function valida_ident() {
      if ((document.form_ident.login.value == "") || (document.form_ident.senha.value == "")) {
        alert("Por favor, preencha todos os campos para continuar. ")
        return (false)
      } else {
        if ((document.form_ident.login.value == "hugo") & (document.form_ident.senha.value == "1234")) {
          var form = document.getElementById("form_ident");
          form.action = "index.php";
        } else {
          alert("Usuário ou senha incorreto!")
        }

      }
    }
  </script>
</body>

</html>