var main = function() {
  $('.menu').click(function() {
    $('.interactive').animate({
      right: "0px"
    }, 200);

    $('body').animate({
      borderRight: "285px"
    }, 200);
$(document).ready(main)