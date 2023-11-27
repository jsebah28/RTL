/* side menu */
$(document).ready(function () {
    $("#mobile_side_banner").hide();
    $("#social_mobile_banner_link").hide();
    $("#hide").click(function () {
      $("#mobile_side_banner").hide();
    });
    $("#open").click(function () {
      $("#mobile_side_banner").show();
    });
    $("#social_banner_open").click(function () {
      $("#social_mobile_banner_link").show();
    });
    $("#social_banner_close").click(function () {
      $("#social_mobile_banner_link").hide();
    });
    $("#social_banner_sidebar_open").click(function () {
      $("#mobile_side_banner").show();
    }); 
  });

  document.addEventListener("DOMContentLoaded", function() {
    // Esta función se ejecuta cuando la página web se ha cargado completamente
    document.getElementById("loader").style.display = "none";
  });

