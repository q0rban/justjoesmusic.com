$(document).ready(function() {
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $(".crazy-carousel-img-300").css("max-width", parent.document.body.clientWidth + 50 + "px");
    if (parent.document.body.clientWidth < 370) {
      $(".crazy-carousel-img-300").css("max-height", "200px");
    }
  }
});