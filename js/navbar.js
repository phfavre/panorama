function myNavbar()
{
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav")
  {
    x.className += " responsive";
  }
  else
  {
    x.className = "topnav";
  }
}

/*$('.topnav_lang_link').on('click', function() {
  let currEl = $(this);
  $('.topnav_lang_link').each(function() {
    $(this).removeClass('activeLang');
  });
  currEl.addClass('activeLang');
});*/