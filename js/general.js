
/*$('.anchorLink').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});*/

$('a[href^="#"]').click(function() {
  var target = parseInt($(this).offset().top);
  $('html, body').animate({
    scrollTop: target - 150
  }, "slow");
  return false;
});