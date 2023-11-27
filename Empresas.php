<!DOCTYPE html>
<html>
<?php include 'header.php'?>
  <body>
    
    <div class="main_content">
      <video
        class="main_video_empresas"
        src="./image/video/background.mp4"
        muted
        autoplay
        loop
        preload="auto"
      ></video>
      <div class="additional_banner_service">
        <div class="pc" style="width: 50%">
          <div class="pc_content">
            <p class="volvere">
              <a href="index.php"
                ><i class="material-icons"> keyboard_backspace</i>Volver a la
                página principal</a
              >
            </p>
            <h1 class="headeremp">EMPRESAS, VALES DIGITALES</h1>

            <p style="margin-bottom: 2rem">
              Bienvenido al futuro con el vale digital y deja atrás el pago con
              efectivo
            </p>
            <p class="text_color">
              <i class="material-icons">play_arrow</i>Facturación electrónica
            </p>
            <p class="text_color">
              <i class="material-icons">play_arrow</i>Control en el flujo de
              caja
            </p>
            <p class="text_color">
              <i class="material-icons">play_arrow</i>Detalle de recorridos y
              valor en el portal
            </p>
            <p class="text_color">
              <i class="material-icons">play_arrow</i>Accede desde diferentes
              dispositivos en cualquier lugar
            </p>
            <a class="whatsapp_btn" href="https://api.whatsapp.com/send?phone=573160255487">
              <img src="image/img/whatsapp_icon.svg" />
              <div class="Comunicate_div">
                <h6>Comunicate con un</h6>
                <h4>Asesor comercial</h4>
              </div>
              <i class="material-icons">play_arrow</i>
            </a>
            <div class="more_details_btn">
              <div class="position_change">
                <p>Más de</p>
                <h4>2.000</h4>
                <h4>vehículos</h4>
                <p>Disponibles</p>
              </div>
            </div>
          </div>
        </div>
        <div style="width: 90%; margin: auto">
          <div class="slideshow-container" style="width: 100%; padding: 0px">
            <div class="mySlides">
              <img src="./image/img/001.png" style="width: 100%" />
            </div>
            <div class="mySlides">
              <img src="./image/img/002.png" style="width: 100%" />
            </div>
            <div class="mySlides">
              <img src="./image/img/003.png" style="width: 100%" />
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
        <div class="logo_mobile">
          <a href="index.php" style="font-size: 16px"
            ><i class="material-icons"> keyboard_backspace</i></a
          >
          <img src="./image/img/logo.png" alt="logo" />
          <p></p>
        </div>
        <div class="service_content_text">
          <h3>EMPRESAS | VALES DIGITALES</h3>
          <p><i class="material-icons">play_arrow</i>Facturación electrónica</p>
          <p>
            <i class="material-icons">play_arrow</i>Control en el flujo de caja
          </p>
          <p>
            <i class="material-icons">play_arrow</i>Detalle de recorridos y
            valor en el portal
          </p>
          <p>
            <i class="material-icons">play_arrow</i>Accede desde diferentes
            dispositivos en cualquier lugar
          </p>
        </div>
        <div class="service_img">
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
            <div class="mySlidesMobiles" style="width: 100%;">
              <img
              
                src="./image/img/lap_mobile_1.png"
                class="user_img_mobile_banner"
                style="width: 100%;"
              />
            </div>
            <div class="mySlidesMobiles" style="width: 100%;">
              <img
                src="./image/img/lap_mobile_2.png"
                class="user_img_mobile_banner"
                style="width: 100%;"
              />
            </div>
            <div class="mySlidesMobiles" style="width: 100%;">
              <img
                src="./image/img/lap_mobile_3.png"
                class="user_img_mobile_banner"
                style="width: 100%;"
              />
            </div>
          </div>
          <div style="text-align: center; display: none">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
        <a
          class="whatsapp_btn_mobile_service"
          href="https://api.whatsapp.com/send?phone=573160255487"
          style="text-decoration: none"
        >
          <img src="./image/img/whatsapp_icon.svg" />
          <div>
            <p>Chatear con un</p>
            <h4>Asesor comercial</h4>
          </div>
          <i class="material-icons">play_arrow</i>
        </a>
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
