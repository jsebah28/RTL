<!DOCTYPE html>
<html>
  <head>
    <title>Los Moviles</title>
    <link rel="stylesheet" href="styles.css" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="./font/font.css">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>
    <header class="additional_header_main ">
      <nav class="additional_header_nav">
          <p><a href='index.php'>Inicio</a></p>
          <p><a href='sobre_nosotros.php'>¿Quiénes somos?</a></p>
          <p><a href='contactanos.php'>Contáctenos</a></p>
      </nav>
  </header>
  <div class="main_content">
    <video class="main_video_pesv" src="./image/video/background.mp4" muted autoplay
        loop preload="auto"></video>
    <div class="prev_banner">
        <a href="conductores.php"><i class="material-icons"> keyboard_backspace</i>Volver a la página
            principal</a>
        <p class='mobile_back_icon'><a href="conductores.php"><i class="material-icons"> keyboard_backspace</i></a></p>
        <div class="content">
            <ul id="timepicker">
                <li class="text_scroll active"><a onclick="changeTextOne()">Política vial</a></li>
                <li class="text_scroll"><a onclick="changeTextTwo()">Velocidad segura</a></li>
                <li class="text_scroll"><a onclick="changeTextThree()">Fatiga al conducir</a></li>
                <li class="text_scroll"><a onclick="changeTextFour()">Alcoholismo, tabaquismo y drogadicción</a></li>
                <li class="text_scroll"><a onclick="changeTextFive()">Distracción en conductores</a></li>
                <li class="text_scroll"><a onclick="changeTextSix()">Uso del cinturón al conducir</a></li>
                <li class="text_scroll"><a onclick="changeTextSeven()">Protección de actores viales vulnerables</a></li>
                <li class="text_scroll"></li>
                <li class="text_scroll"></li>
                <li class="text_scroll"></li>
                <li class="text_scroll"></li>
                <li class="text_scroll"></li>
            </ul>
            <script>
            function changeTextOne() {
                document.getElementById("demo").innerHTML =
                    "Política vial: RADIO TAXIS LIBRES S.A.S. está comprometida con promover la ejecución de actividades de prevención y control con el propósito de mitigar los riesgos viales asociados a los accidentes de tránsito, los cuales estarán integrados al Sistema de Gestión de Seguridad y Salud en el Trabajo. La empresa acorde con los lineamientos de la normativa vigente con respecto al Plan Estratégico de Seguridad Vial, se compromete a mejorar las condiciones que impliquen una cultura de autocuidado en la prevención de accidentes e incidentes viales que puedan afectar la integridad física, mental y social de los funcionarios y contratistas que deban desempeñar cualquier rol en la vía de acuerdo con el Código Nacional de Tránsito, todo enmarcado en los valores de la organización y en los procesos de mejora continua, que contribuyan por la adopción de conductas proactivas para prevenir accidentes e incidentes en la vía.";
            }

            function changeTextTwo() {
                document.getElementById("demo").innerHTML =
                    "RADIO TAXIS LIBRES SAS, establece la política y programa de gestión de velocidad segura, cumpliendo con los límites de velocidad para los vehículos tipo taxi y servicio especial. El  límite de velocidad para los vehículos de servicio público, en zonas urbanas, será de treinta (30) kilómetros por hora y en carreteras nacionales y departamentales las velocidades autorizadas serán determinadas por el Ministerio de Transporte o la Gobernación, según sea el caso teniendo en cuenta las especificaciones de la vía. En ningún caso podrá sobrepasar los 80 kilómetros por hora. El control de la velocidad de nuestros vehículos se obtiene por el monitoreo que hacemos por medios tecnológicos como GPS, tacómetros, radares móviles de la app que tenemos."
            }

            function changeTextThree() {
                document.getElementById("demo").innerHTML =
                    "RADIO TAXIS LIBRES SAS, establece la política y programa de prevención de la fatiga al conducir, para disminuir el riesgo en las vías, controlar la jornada de trabajo, horas de conducción, descanso de los conductores que afectan la productividad por pérdidas humanas y materiales. El control de la fatiga en los conductores de nuestros vehículos lo realizamos a través de capacitaciones y envíos de mensajes que hacemos a través de la app que tenemos."
            }

            function changeTextFour() {
                document.getElementById("demo").innerHTML =
                    "RADIO TAXIS LIBRES S.A.S  establece la política y programa de  prevención de alcoholismo, tabaquismo y drogadicción; busca Prevenir y controlar que los trabajadores y conductores se movilicen en las vías bajo el efecto de alcohol y sustancias psicoactivas; con el fin de evitar efectos o consecuencias negativas en la salud, el entorno y accidentes de tránsito que ocasionan pérdidas humanas y económicas. Este control lo tenemos para disminuir los índices de incidentes y accidentes ocurridos por esta causa."
            }

            function changeTextFive() {
                document.getElementById("demo").innerHTML =
                    "RADIO TAXIS LIBRES S.A.S  establece la política y programa de distracción en conductores; para disminuir  el desvío de la atención de todas aquellas actividades esenciales para una conducción segura para poder evitar accidentes en las vías y proteger la vida de conductores, pasajeros o  peatones. Para el control de esta  política y programa se establece que los conductores no deben usar  cualquier objeto que le produzca distracción como los sistemas estéreos y celulares en horarios laborales, los conductores deben planificar la ruta,  evitar comer o fumar mientras manejan,  mantener  los ojos en movimiento, y mantener  una distancia segura."
            }

            function changeTextSix() {
                document.getElementById("demo").innerHTML =
                    "RADIO TAXIS LIBRES S.A.S  establece la política y programa de uso del cinturón de seguridad;  para todos los vehículos automotores que pertenezcan a nuestra empresa  que transiten por las vías del territorio nacional incluyendo las vías urbanas;  vehículos de taxi o de servicio especial, que tienen que portar en los asientos delanteros el cinturón de seguridad obligatorio los conductores y pasajeros."
            }

            function changeTextSeven() {
                document.getElementById("demo").innerHTML =
                    "RADIO TAXIS LIBRES S.A.S  establece la política y programa de protección de actores viales vulnerables;  para priorizar acciones y medidas urgentes para salvaguardar la vida e integridad física de los actores viales vulnerables;  con el propósito de educar, sensibilizar a los conductores y colaboradores para proteger la vida de todos los actores viales. Con el fin de educar, sensibilizar a los conductores y colaboradores para proteger la vida de todos los actores viales."
            }
            </script>
            <div class="content_right">
                <p id="demo">
                    <span>
                        RADIO TAXIS LIBRES S.A.S.está comprometida con promover la ejecución de
                        actividades de prevención y control con el propósito de mitigar los riesgos viales asociados a
                        los accidentes de tránsito, los cuales estarán integrados al Sistema de Gestión de Seguridad y
                        Salud en el Trabajo. La empresa acorde con los lineamientos de la normativa vigente con respecto
                        al Plan Estratégico de Seguridad Vial, se compromete a mejorar las condiciones que impliquen una
                        cultura de autocuidado en la prevención de accidentes e incidentes viales que puedan afectar la
                        integridad física, mental y social de los funcionarios y contratistas que deban desempeñar
                        cualquier rol en la vía de acuerdo con el Código Nacional de Tránsito, todo enmarcado en los
                        valores de la organización y en los procesos de mejora continua, que contribuyan por la adopción
                        de conductas proactivas para prevenir accidentes e incidentes en la vía.
                    </span>
                </p>
            </div>
        </div>

        <div class='mobile_content'>
            <h3>PLAN ESTRATÉGICO DE SEGURIDAD VIAL (PESV)</h3>
            <a>
                <details>
                    <summary>Plan vial del plan estratégico de seguridad vial</summary><br>
                    Política vial: RADIO TAXIS LIBRES S.A.S. está comprometida con promover la ejecución de actividades de prevención y control con el propósito de mitigar los riesgos viales asociados a los accidentes de tránsito, los cuales estarán integrados al Sistema de Gestión de Seguridad y Salud en el Trabajo. La empresa acorde con los lineamientos de la normativa vigente con respecto al Plan Estratégico de Seguridad Vial, se compromete a mejorar las condiciones que impliquen una cultura de autocuidado en la prevención de accidentes e incidentes viales que puedan afectar la integridad física, mental y social de los funcionarios y contratistas que deban desempeñar cualquier rol en la vía de acuerdo con el Código Nacional de Tránsito, todo enmarcado en los valores de la organización y en los procesos de mejora continua, que contribuyan por la adopción de conductas proactivas para prevenir accidentes e incidentes en la vía.
                </details>
            </a>
            <a>
                <details>
                    <summary>Política y programa de velocidad segura</summary><br>
                    RADIO TAXIS LIBRES SAS, establece la política y programa de gestión de velocidad segura, cumpliendo con los límites de velocidad para los vehículos tipo taxi y servicio especial. El  límite de velocidad para los vehículos de servicio público, en zonas urbanas, será de treinta (30) kilómetros por hora y en carreteras nacionales y departamentales las velocidades autorizadas serán determinadas por el Ministerio de Transporte o la Gobernación, según sea el caso teniendo en cuenta las especificaciones de la vía. En ningún caso podrá sobrepasar los 80 kilómetros por hora. El control de la velocidad de nuestros vehículos se obtiene por el monitoreo que hacemos por medios tecnológicos como GPS, tacómetros, radares móviles de la app que tenemos.
                </details>
            </a>
            <a>
                <details>
                    <summary>Política y programa de prevención de la fatiga al conducir</summary><br>
                    RADIO TAXIS LIBRES SAS, establece la política y programa de prevención de la fatiga al conducir, para disminuir el riesgo en las vías, controlar la jornada de trabajo, horas de conducción, descanso de los conductores que afectan la productividad por pérdidas humanas y materiales. El control de la fatiga en los conductores de nuestros vehículos lo realizamos a través de capacitaciones y envíos de mensajes que hacemos a través de la app que tenemos.
                </details>
            </a>
            <a>
                <details>
                    <summary>Política y programa de prevención del alcoholismo, tabaquismo y drogadicción</summary><br>
                    RADIO TAXIS LIBRES S.A.S  establece la política y programa de  prevención de alcoholismo, tabaquismo y drogadicción; busca Prevenir y controlar que los trabajadores y conductores se movilicen en las vías bajo el efecto de alcohol y sustancias psicoactivas; con el fin de evitar efectos o consecuencias negativas en la salud, el entorno y accidentes de tránsito que ocasionan pérdidas humanas y económicas. Este control lo tenemos para disminuir los índices de incidentes y accidentes ocurridos por esta causa.
                </details>
            </a>
            <a>
                <details>
                    <summary>Política y programa de distracción de conductores</summary><br>
                    RADIO TAXIS LIBRES S.A.S  establece la política y programa de distracción en conductores; para disminuir  el desvío de la atención de todas aquellas actividades esenciales para una conducción segura para poder evitar accidentes en las vías y proteger la vida de conductores, pasajeros o  peatones. Para el control de esta  política y programa se establece que los conductores no deben usar  cualquier objeto que le produzca distracción como los sistemas estéreos y celulares en horarios laborales, los conductores deben planificar la ruta,  evitar comer o fumar mientras manejan,  mantener  los ojos en movimiento, y mantener  una distancia segura.
                </details>
            </a>
            <a>
                <details>
                    <summary>Política y programa de uso del cinturón al conducir</summary><br>
                    RADIO TAXIS LIBRES S.A.S  establece la política y programa de uso del cinturón de seguridad;  para todos los vehículos automotores que pertenezcan a nuestra empresa  que transiten por las vías del territorio nacional incluyendo las vías urbanas;  vehículos de taxi o de servicio especial, que tienen que portar en los asientos delanteros el cinturón de seguridad obligatorio los conductores y pasajeros.
                </details>
            </a>
            <a>
                <details>
                    <summary>Política y programa de protección de actores viales vulnerables</summary><br>
                    RADIO TAXIS LIBRES S.A.S  establece la política y programa de protección de actores viales vulnerables;  para priorizar acciones y medidas urgentes para salvaguardar la vida e integridad física de los actores viales vulnerables;  con el propósito de educar, sensibilizar a los conductores y colaboradores para proteger la vida de todos los actores viales. Con el fin de educar, sensibilizar a los conductores y colaboradores para proteger la vida de todos los actores viales.
                </details>
            </a>
        </div>

    </div>
</div>
  </body>
  <script>
    $("#timepicker li").on("click", function() {
  $("#timepicker li").removeClass("active");
  $(this).addClass("active");
  $("#timepicker").scrollCenter(".active", 300);
});
jQuery.fn.scrollCenter = function(elem, speed) {
  var active = jQuery(this).find(elem); 
  var activeWidth = active.height()/2; 
  var pos = active.position().top+activeWidth; 
  var currentscroll = jQuery(this).scrollTop();
  var divwidth = jQuery(this).height(); 
  pos = pos + currentscroll - divwidth / 2; 
  jQuery(this).animate({
    scrollTop: pos
  }, speed == undefined ? 1000 : speed);
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

</script>
</html>
