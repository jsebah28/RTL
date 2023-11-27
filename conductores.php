<!DOCTYPE html>
<html>
  <head>
    <title>Los Moviles</title>
    <link rel="stylesheet" href="./font/font.css">
    <link rel="stylesheet" href="styles.css" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header class="additional_header_main header_nav">
      <nav class="additional_header_nav" >
        <p><a href="index.php">Inicio</a></p>
        <p><a href="sobre_nosotros.php">¿Quiénes somos?</a></p>
        <p><a href="contactanos.php">Contáctenos</a></p>
      </nav>
    </header>
    <div class="main_content">
      <video
        class="main_video_conductor"
        src="./image/video/background.mp4"
        muted
        autoplay
        loop
        preload="auto"
      ></video>
      <div class="conduct_banner">
        <div class="conduct_banner_left">
          <p>
            <a href="index.php" style="font-size: 16px"
              ><i class="material-icons"> keyboard_backspace</i>Volver a la
              página principal</a
            >
          </p>
          <div class="conduct_banner_content">
            <h1>APLICACIÓN DEL CONDUCTOR</h1>
            <div class="add_conduct_banner">
              <p>
                <i class="material-icons">play_arrow</i>Muestra las zonas de
                alta demanda
              </p>
              <p>
                <i class="material-icons">play_arrow</i>Comunicación entre el
                conductor y el usuario
              </p>
              <p>
                <i class="material-icons">play_arrow</i>Seguimiento al conductor
                en todo momento
              </p>
              <p>
                <i class="material-icons">play_arrow</i>Pago de administración
                dentro de la app
              </p>
            </div>
            <a
              class="play_store_btn"
              href="https://play.google.com/store/apps/details?id=com.losmoviles.conductor"
              style="text-decoration: none"
            >
              <img src="./image/img/play_store_icon.png" />
              <div>
                <h6>Descarga en</h6>
                <h4>Play Store</h4>
              </div>
              <i class="material-icons">play_arrow</i>
            </a>
            <a class="plan_border_add" href="pesv.php">
              <p>Plan estratégico de seguridad vial PESV</p>
              <i class="material-icons">play_arrow</i>
            </a>
          </div>
        </div>
        <div style="width: 50%">
          <div
            class="slideshow-container"
            style="
              width: 100%;
              padding: 0px;
              display: flex;
              justify-content: center;
              height: 100%;
              align-items: center;
            "
          >
            <div class="mySlides">
              <img src="./image/img/app_driver_1.png" class="tran_img" />
            </div>
            <div class="mySlides">
              <img src="./image/img/app_driver_2.png" class="tran_img" />
            </div>
            <div class="mySlides">
              <img src="./image/img/app_driver_3.png" class="tran_img" />
            </div>
          </div>
          <div style="text-align: center; display: none">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
      <div class="usuarious_banner_mobile">
        <a href="index.php" style="font-size: 16px"
          ><i class="material-icons"> keyboard_backspace</i></a
        >
        <div class="conduct_mobile_container">
          <div class="conduct_top_mobile">
            <div class="text_img_mobile">
              <div class="conduct_mobile_content">
                <h3>Aplicación conductor</h3>
                <ul>
                  <li>Muestra las zonas de alta demanda</li>
                  <li>Seguimiento al conductor en todo momento</li>
                  <li>Pago de administración dentro de la app</li>
                </ul>
              </div>
              <div style="width: 50%">
                <div
                  class="slideshow-container"
                  style="
                    width: 100%;
                    padding: 0px;
                    display: flex;
                    justify-content: flex-end;
                    height: 100%;
                  "
                >
                  <div class="mySlidesMobiles">
                    <img
                      src="./image/img/app_driver_1.png"
                      class="conductor_img_mobile"
                    />
                  </div>
                  <div class="mySlidesMobiles">
                    <img
                      src="./image/img/app_driver_2.png"
                      class="conductor_img_mobile"
                    />
                  </div>
                  <div class="mySlidesMobiles">
                    <img
                      src="./image/img/app_driver_3.png"
                      class="conductor_img_mobile"
                    />
                  </div>
                </div>
                <div style="text-align: center; display: none">
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                </div>
              </div>
            </div>
            <a
              class="conduct_play_store"
              href="https://play.google.com/store/apps/details?id=com.losmoviles.conductor"
              style="text-decoration: none"
            >
              <img src="./image/img/play_store_icon.png" />
              <div>
                <h6>Descarga en</h6>
                <h4>Play Store</h4>
              </div>
            </a>
          </div>
          <a class="conduct_bottom_mobile" href="pesv.php">
            <p>Conoce el plan estratégico de seguridad vial PESV</p>
            <i class="material-icons">play_arrow</i>
          </a>
        </div>
      </div>
    </div>
  </body>
  <script>
    $("#timepicker li").on("click", function () {
      $("#timepicker li").removeClass("active");
      $(this).addClass("active");
      $("#timepicker").scrollCenter(".active", 300);
    });
    jQuery.fn.scrollCenter = function (elem, speed) {
      var active = jQuery(this).find(elem);
      var activeWidth = active.height() / 2;
      var pos = active.position().top + activeWidth;
      var currentscroll = jQuery(this).scrollTop();
      var divwidth = jQuery(this).height();
      pos = pos + currentscroll - divwidth / 2;
      jQuery(this).animate(
        {
          scrollTop: pos,
        },
        speed == undefined ? 1000 : speed
      );
      return this;
    };
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000);
    }

    let moblieIndex = 0;
    mobileSlides();

    function mobileSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlidesMobiles");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      moblieIndex++;
      if (moblieIndex > slides.length) {
        moblieIndex = 1;
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[moblieIndex - 1].style.display = "block";
      dots[moblieIndex - 1].className += " active";
      setTimeout(mobileSlides, 2000);
    }
  </script>
</html>
