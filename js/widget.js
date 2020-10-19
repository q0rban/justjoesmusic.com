$(document).ready(function () {
  if (!document.cookie.includes("closedWidget=true")) {
    $("#widget").delay(3000).slideDown();
  }
  $("#close-widget").click(function () {
    $(".widget").slideUp();
    document.cookie = 'closedWidget=true;max-age='+(3600*4)+';';
  });
  $("#widget-link").click(function () {
    document.cookie = 'closedWidget=true;max-age='+(3600*4)+';';
  });
});