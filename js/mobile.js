var setHeaderWidth = function () {
  var smallWidth = $("#header-small-text").width();
  var largeWidth = $("#header-large-text").width();
  if (smallWidth >= largeWidth) {
    $("#header-transparent-width").width(smallWidth + 60);
  } else {
    $("#header-transparent-width").width(largeWidth + 60);
  }
}

var mobileAdjustment = function () {
  $(".no-mobile").hide();
  $(".mobile-heading").css("fontSize", "24px");
  $(".mobile-subheading").css({
    "font-size": "16px",
    "letter-spacing": "normal",
  });
  $("#WRchTxt6-euy").css("padding", "0 5% 0 5%");
  $(".yes-mobile").show();
  $(".left-content").css({
    "float": "none",
    "margin": "auto",
  });
  setHeaderWidth();
}

var desktopAdjustment = function () {
  $(".no-mobile").show();
  $(".mobile-heading").css("fontSize", "42px");
  $(".mobile-subheading").css({
    "font-size": "22px",
    "letter-spacing": "normal",
  });
  $("#WRchTxt6-euy").css("padding", "0 5% 0 5%");
  $(".yes-mobile").hide();
  $(".left-content").css({
    "float": "none",
    "margin": "auto",
  });
  setHeaderWidth();
}

$(document).ready(function () {
  setHeaderWidth();
  desktopAdjustment();
  if ($(window).width() < 970) {
    mobileAdjustment();
  }


  // Adjusts header size based on which slogan line is widers

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        setHeaderWidth();
        $(".header").css({
          "background-size": "stretch",
          "background-overflow": "visible",
          "overflow": "none",
          "padding": "20px 0 0 0",
        });
        if (document.body.clientWidth < 370) {
          $("#StrpShwcs0-127yiframe, #SvgShp1-2k8, .tpa-gallery-StripShowcase, .override-height, #StrpShwcs0-127y").css("max-height", "200px");
        }
        // $("#header-large-text").css("fontSize", "20px");
        // $("#header-small-text").css("fontSize", "10px");
        $("#header-logo").css("width", "140px")
        $(".adjust-table-font").css("fontSize", "11px");
        $(".no-mobile").hide();
        $(".mobile-heading").css("fontSize", "23px");
        $(".mobile-subheading").css({
          "font-size": "15px",
          "letter-spacing": "normal",
        });    
      $("#WRchTxt6-euy").css("padding", "0 5% 0 5%");
      $(".yes-mobile").show();
  
      $("#StrpShwcs0-127y").css({
        "height": "300px",
        "max-width": "100%"
      });
      $("#StrpShwcs0-127yiframe").css({
        "height": "300px",
        "max-width": "100%",
      });
      $(".paragraph").css({
        "padding-left": "20px",
        "padding-right": "20px",
      })
      $(".float-right-content").css({
        "float": "none",
        "margin": "0 auto",
      });
      $(".brand img").css({
        "width": "50px",
      });
      $(".brand-larger img").css({
        "width": "60px"
      });
      $(".yamaha-brand img").css({
        "width": "90",
      });
      $(".widget").css("bottom", "25px");
      $(".widget").width("175px").height("150px");
      $("#widget-logo").width("50px");
      $(".widget-heading").css("fontSize", "11px");
      $(".widget-small").css("fontSize", "10px");
      $(".widget p").css("padding", "0 3px 0 3px")

    } else {
      $("p strong").css({
        "color": "#555",
        "font-weight": "normal",
      });
    
      $( window ).resize(function() {
        if ($(window).width() < 970) {
          mobileAdjustment();
        } else if ($(window).width() >= 970) {
          desktopAdjustment();
        }
      });
    
    }
});