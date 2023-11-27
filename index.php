<!DOCTYPE html>
<html id="html">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner"> 
          <div class="carousel-item active" data-bs-interval="2000">
          <img src="./image/img/banner.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
          <img src="./image/img/banner_1.png" class="d-block w-100" alt="...">
          </div>
      </div>
  </div>
  <?php include 'header.php'?>
  <body>
    <div class="main_content">
      <video
        class="main_video_banner"
        src="./image/video/background.mp4"
        muted
        autoplay
        loop
        preload="auto"
      ></video>
      <div class="banner">
        <div class="sub_banner">
          <div class="banner_card_column">
            <a class="banner_card" href="Empresas.php">
              <img src="./image/img/company_buttom_image.png" />
              <div>
                <h4>Empresas</h4>
                <p>Elimina el efectivo con vale digital</p>
              </div>
            </a>
            <a class="banner_card" href="Servicio_especial.php">
              <img src="./image/img/car_buttom_image.png" />
              <div>
                <h4>Servicio especial</h4>
                <p>Vehículos de alta gama</p>
              </div>
            </a>
          </div>
          <div class="banner_card_img">
            <img src="./image/img/logo_web.png" />
          </div>
          <div class="banner_card_column">
            <a class="banner_card" href="conductores.php">
              <img src="./image/img/driver_buttom_image.png" />
              <div>
                <h4>Conductores</h4>
                <p>App e información relacionada</p>
              </div>
            </a>
            <a class="banner_card" href="Usuarios.php">
              <img src="./image/img/user_buttom_image.png" />
              <div>
                <h4>Usuarios</h4>
                <p>App Los Móviles</p>
              </div>
            </a>
          </div>
        </div>
        
        <div class="contact_card">
          
          <a class="sub_contact_card" href="https://api.whatsapp.com/send?phone=573183822222" style="text-decoration: none" target="_blank">
            <div>
              <img src="image/img/whatsapp_icon.svg" />
              <p>Pide tu móvil desde</p>
            </div>
            <h4>Whatsapp</h4>
          </a>

          <p>o</p>
          <p>Llama desde cualquier smartphone/teléfono al</p>
          <h5>607 - 6342222</h5>
        </div>
      </div>
    </div>

    <div class="information_card">
      <a target="_blank" class="information_card_sub" href="mailto:servicioalcliente@losmoviles.com.co" style="text-decoration: none">
        <i class="material-icons">mail</i>
        <div>
          <p>Correo</p>
          <p>servicioalcliente@losmoviles.com.co</p>
        </div>
      </a>
      <a target="_blank" class="information_card_sub" href="tel:6076354040" style="text-decoration: none">
          <i class="material-icons">call</i>
          <div>
            <p>Área administrativa</p>
            <p>607 6354040</p>
          </div>
      </a>

      <a target="_blank" class="information_card_sub" href="https://www.google.com/maps/place/Radio+Taxis+Libres+S.A.S/@7.1376989,-73.1286551,17z/data=!4m15!1m8!3m7!1s0x8e681573ce9dc669:0xd6028c99d39f8ab8!2sCl.+9+%2320-55,+Bucaramanga,+Santander!3b1!8m2!3d7.1376989!4d-73.1264664!16s%2Fg%2F11fq4y4zpv!3m5!1s0x8e681573cebbb737:0x3867bb43bf441fdf!8m2!3d7.1376568!4d-73.1264847!16s%2Fg%2F1w3w425d">
          <i class="material-icons">location_on</i>
          <div>
            <p>Ubicación</p>
            <p>calle 9 #20 55 | Bucaramanga, Santander</p>
          </div>
      </a>
      
    </div>

    <div class="company_details">
      <div class="company_details_sub">
        <div class="company_details_sub_one">
          <h6>NUESTRA EMPRESA</h6>
          <p>
            Radio Taxis Libres S.A.S es una empresa dedicada al servicio de
            transporte público terrestre automotor individual de pasajeros en
            vehículos tipo taxi metropolitano y servicio especial con operación
            nacional
          </p>
        </div>
        <div class="company_details_sub_two">
          <h6>ENLACES RÁPIDOS</h6>
          <p><a href="sobre_nosotros.php">¿Quiénes somos?</a></p>
<!--           <p><a href="PQR.php">PQR's</a></p>
 -->          <p><a href="pesv.php">PESV</a></p>
          <p><a href="terminos_y_condiciones.php">Términos y condiciones</a></p>
          <p><a href="politica_de_privacidad.php">Política de privacidad</a></p>
        </div>
        <div class="company_details_sub_three">
          <h6>HORARIO DE ATENCIÓN</h6>
          <p style="width: 100%">
            Lunes a viernes
            <span style="width: 50%">7:30 a.m. - 5:00 p.m.</span>
          </p>
          <p style="width: 100%">
            Sábados <span style="width: 50%">8:00 a.m. - 11:30 a.m.</span>
          </p>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer_content">
        <p>© 2023 Radio Taxis Libres S.A.S | Todos los derechos reservados</p>
      </div>
      <div class="footer_img">
        <img src="./image/img/logo ministerio de transporte.png" />
        <img src="./image/img/logo super intendencia.png" />
        <img src="./image/img/logo direccion de transito.png" />
        <img src="./image/img/mintic_logo.png" />
      </div>
    </footer>
    <div class="banner_mobile" id="banner_mobile">
      <div class="logo_mobile_banner">
        <a style="font-size: 16px" id="open" style="text-decoration: none"
          ><i class="material-icons">menu</i></a
        >
        <img src="./image/img/logo.png" alt="logo" />
        <p></p>
      </div>
      <div class="card_banner_one">
        <img src="./image/img/vales_digitales.png" alt="" />
        <div class="card_banner_content">
          <p>Elimina el efectivo con</p>
          <h3>VALES DIGITALES</h3>
          <a href="Empresas.php">Saber más</a>
        </div>
      </div>
      <div class="card_banner_one">
        <img src="./image/img/servicio_especial.png" alt="" />
        <div class="card_banner_content">
          <p>Vehículos de alta gama</p>
          <h3>SERVICIO ESPECIAL</h3>
          <a href="Servicio_especial.php">Saber más</a>
        </div>
      </div>
      <div class="card_banner_one">
        <img src="./image/img/movil_2000.png" alt="" />
        <div class="card_banner_content">
          <p>Más de</p>
          <h3>2.000 VEHÍCULOS <span>disponibles</span></h3>
          <a id="social_banner_open">Pide tu móvil</a>
        </div>
      </div>
    </div>
    <div class="mobile_side_banner" id="mobile_side_banner">
      <div class="mobile_side_banner_icon">
        <a style="font-size: 16px" id="hide" style="text-decoration: none"
          ><i class="material-icons">close</i></a
        >
      </div>

      <div class="mobile_side_banner_text">
        <a href="sobre_nosotros.php">¿Quiénes somos?</a>
        <a href="contactanos.php">Contáctenos</a>
        <a href="Usuarios.php">Usuarios</a>
        <a href="conductores.php">Conductores</a>
        <span style="height: 1px; background-color: #FAFAFA50;"></span>
        <a href="terminos_y_condiciones.php">Términos y condiciones</a>
        <a href="politica_de_privacidad.php">Política de privacidad</a>
        <!-- <a href="PQR.php">PQR's</a> -->
      </div>
    </div>
    <div class="social_mobile_banner_link" id="social_mobile_banner_link">
      <div class="social_mobile_banner_link_header">
        <a id="social_banner_sidebar_open" style="text-decoration: none; display: flex"
          ><i class="material-icons" style="font-size: 40px">menu</i></a
        >
        <a id="social_banner_close"
          style="text-decoration: none"
          class="social_mobile_banner_link_header_close"
          ><i class="material-icons">close</i></a
        >
      </div>
      <div style="padding-top: 5rem;">
        <a class="social_mobile_banner_btns" href="https://play.google.com/store/apps/details?id=com.losmoviles.usuario">
          <img src="./image/img/play_store_icon.png" alt="" />
          <div>
            <p>Descarga en</p>
            <h3>Play Store</h3>
          </div>
        </a>
        <a class="social_mobile_banner_btns"  href="https://apps.apple.com/co/app/los-moviles/id1437641070?l=en">
          <img src="./image/img/app_store_icon.png" alt="" />
          <div>
            <p>Descarga en</p>
            <h3>App Store</h3>
          </div>
        </a>
        <a class="social_mobile_banner_btns"  href="https://api.whatsapp.com/send?phone=573183822222">
          <img src="./image/img/whatsapp_icon.png" alt="" />
          <div>
            <p>Pide tu móvil por</p>
            <h3>Whatsapp</h3>
          </div>
        </a>
        <a class="social_mobile_banner_btns" href="tel:6076342222">
          <img src="./image/icons/phone icon.png" alt="" />
          <div>
            <p>Pide tu móvil al</p>
            <h3>607-6342222</h3>
          </div>
        </a>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
