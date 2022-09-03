<html lang="pt-br">

  <head>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <meta charset="UTF-8">
    <script src="jquery-3.6.1.js"></script>

  </head>

  <body>
    <div class="destaque">
      <img class="capa" src="https://free4kwallpapers.com/uploads/originals/2017/01/11/times-square-night-wallpaper.jpg" width="100%" height="650">

      <font class="titulo">
        New York
        <p><span class="bio">A cidade que nunca dorme.</span></p>
      </font>
    </div>

    <div class="projetos">
      <font id="projetos" class="projetos-titulo">
        Projetos
      </font>
      <hr class="hr-projetos" size="1">

      <div class="projetos-lista">
        <div class="projetos-capa">
          <a href="https://64.media.tumblr.com/8e1edd55b6b7e9f9431bb870532354ae/tumblr_o04ll67AS71tl3wclo1_1280.jpg"><img src="https://64.media.tumblr.com/8e1edd55b6b7e9f9431bb870532354ae/tumblr_o04ll67AS71tl3wclo1_1280.jpg" width="100%" height="100%"></a>
        </div>

        <div class="projetos-capa">
          <a href="https://c0.wallpaperflare.com/preview/269/1013/282/new-york-light-tumblr-moody.jpg"><img src="https://c0.wallpaperflare.com/preview/269/1013/282/new-york-light-tumblr-moody.jpg" width="100%" height="100%"></a>
        </div>

        <div class="projetos-capa">
          <a href="https://i.pinimg.com/originals/4e/75/29/4e75291cc3a748d32bf6c163e2521e8f.jpg"><img src="https://i.pinimg.com/originals/4e/75/29/4e75291cc3a748d32bf6c163e2521e8f.jpg" width="100%" height="100%"></a>
        </div>

        <div class="projetos-capa">
          <a href="https://free4kwallpapers.com/uploads/originals/2017/01/11/times-square-night-wallpaper.jpg"><img src="https://free4kwallpapers.com/uploads/originals/2017/01/11/times-square-night-wallpaper.jpg" width="100%" height="100%"></a>
        </div>

        <div class="projetos-capa">
          <a href="https://64.media.tumblr.com/ccc21cc11d898af7ade77b2a92f566b5/tumblr_p7t1ej13xx1tl3wclo1_1280.jpg"><img src="https://64.media.tumblr.com/ccc21cc11d898af7ade77b2a92f566b5/tumblr_p7t1ej13xx1tl3wclo1_1280.jpg" width="100%" height="100%"></a>
        </div>

        <div class="projetos-capa">
          <a href="https://pyxis.nymag.com/v1/imgs/384/7db/004cff1eb72ddc2762db09ec3351266f35-manhattan-building-2.rhorizontal.w700.jpg"><img src="https://pyxis.nymag.com/v1/imgs/384/7db/004cff1eb72ddc2762db09ec3351266f35-manhattan-building-2.rhorizontal.w700.jpg" width="100%" height="100%"></a>
        </div>

        <div class="projetos-capa">
          <a href="https://64.media.tumblr.com/fae5243a763f5815bd47223c8ff3c324/tumblr_p7t1dyg7Ey1tl3wclo1_1280.jpg"><img src="https://64.media.tumblr.com/fae5243a763f5815bd47223c8ff3c324/tumblr_p7t1dyg7Ey1tl3wclo1_1280.jpg" width="100%" height="100%"></a>
        </div>

        <div class="projetos-capa">
          <a href="https://wallpaperaccess.com/full/1137717.jpg"><img src="https://wallpaperaccess.com/full/1137717.jpg" width="100%" height="100%"></a>
        </div>
      </div>
    </div>

    <div class="sobre">
      <font id="sobre" class="sobre-titulo">
        Sobre
      </font>
      <hr class="hr-sobre" size="1">

      <div class="sobre-block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
    </div>

    <div class="contato">
      <font id="contato" class="contato-titulo">
        Contato
      </font>
      <hr class="hr-contato" size="1">

      <div class="form-block">
        <form action="" method="POST">
          <input class="input-box" type="text" name="nome" placeholder="Nome" required="">
          <input class="input-box" type="email" name="email" placeholder="Email" required="">
          <input class="input-box" type="text" name="msg" placeholder="Mensagem" required="">
          <input class="input-submit" type="submit" name="submit" value="Enviar">
        </form>
      </div>
    </div>

    <?php include("menu.php"); ?>

    <?php $dataFooter = date('Y'); ?>

    <footer>
      <?php echo $dataFooter; ?> © Vitor Cunha
    </footer>
  </body>

</html>