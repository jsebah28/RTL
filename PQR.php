<!DOCTYPE html>
<html>
  <head>
    <title>Los Moviles</title>
    <link rel="stylesheet" href="styles.css" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="./font/font.css">

  </head>
  <header class="additional_header_main">
    <nav class="additional_header_nav">
    <p><a href='index.php'>Inicio</a></p>
      <p><a href='sobre_nosotros.php'>¿Quiénes somos?</a></p>
      <p><a href='contactanos.php'>Contáctenos</a></p>
    </nav>
  </header>
  <div class="logo_mobile">
    <a href="index.php" style="font-size: 16px"
      ><i class="material-icons"> keyboard_backspace</i></a
    >
    <img src="./image/img/logo.png" alt="logo" />
    <p></p>
  </div>
  <body>
    <div class="main_content">
      <video class="main_video" src="./image/video/background.mp4" muted autoplay loop preload="auto"></video>
      <div class="pqr_banner">
          <a href="index.php"><i class="material-icons"> keyboard_backspace</i>Volver a la página principal</a>
          <div class="pqr_wrapper">
              <h1>PQR</h1>
              <div class="pqr_card_container">
                  <form action="">
                      <div class='form_filed_content'>
                        <div class="pqr_form_one">
                            <label for="user_name">Nombre completo*</label>
                            <input name="user_name" type="text" required autofocus id="user_name"/>

                            <label for="user_phone">Celular*</label>
                            <input name="user_phone" type="tel" maxlength="10" inputmode="numeric" required id="user_phone"/>
                            
                            <label for="">Correo*</label>
                            <input type="email"  required/>
                        </div>

                        <div class="pqr_form_two">
                            <p>¿Qué vas a reportar?</p>
                            <div class="switch-field">
                                <input type="radio" id="radio-one" name="switch-one" value="no" />
                                <label for="radio-one">Sugerencia</label>
                                <input type="radio" id="radio-two" name="switch-one" value="yes" checked />
                                <label for="radio-two">Queja</label>
                            </div>
                            <label for="">Cuentanos lo sucedido*</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>

                      </div>
                      <div class="pqr_checkbox_div">
                          <div>
                              <div style='position:relative'>
                                  <label class="container_checkbox">
                                      <input type="checkbox">
                                      <span class="checkmark"></span>
                                  </label>
                              </div>
                              <label for="checkbox1">
                                  He leído y acepto la
                                  <a style="color: #fdbf00 !important; text-decoration: underline" href='Política_privacidad.php'>política
                                      de
                                      privacidad</a>
                                  de www.radiotaxislibres.com
                                </label><br>
                          </div>
                          <button>Enviar</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
  </body>
</html>
