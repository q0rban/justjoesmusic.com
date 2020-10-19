var found1 = false;
var found2 = false;
var found3 = false;
var found4 = false;
var found5 = false;
$(document).ready(function() {
  $('.scroll-4').hide();
  $('.scroll-4').slideDown();

  $('#scroll-1').css("visibility", "hidden");
  $(window).scroll(function() {
    if( $('#scroll-1:visible').visible() && found1 === false ) {
      $('#scroll-1').hide();
      $('#scroll-1').css("visibility", "visible")
      $('#scroll-1').fadeIn();
      found1 = true;
    }
  });

  $('.scroll-2').css("visibility", "hidden");
  $(window).scroll(function() {
    if( $('.scroll-2:visible').visible() && found2 === false ) {
      $('.scroll-2').hide();
      $('.scroll-2').css("visibility", "visible")
      $('.scroll-2').slideDown();
      found2 = true;
    }
  });

  $('.scroll-3').css("visibility", "hidden");
  $(window).scroll(function() {
    if( $('.scroll-3:visible').visible() && found3 === false ) {
      $('.scroll-3').hide();
      $('.scroll-3').css("visibility", "visible")
      $('.scroll-3').slideDown();
      found3 = true;
    }
  });
  $('.scroll-5').css("visibility", "hidden");
  $(window).scroll(function() {
    if( $('.scroll-5:visible').visible() && found5 === false ) {
      $('.scroll-5').hide();
      $('.scroll-5').css("visibility", "visible")
      $('.scroll-5').slideDown();
      found5 = true;
    }
  });

});