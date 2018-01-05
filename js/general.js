
$('.anchorLink').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

$('#product_section_button').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

$('#title_arrow_down_img').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

function validateEmail(mail)
{
  if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return true;
  }
  return false;
}


$('#demo_form_button').click(function(){
    if($('#email_address_input').val() != '' && validateEmail($('#email_address_input').val()))
    {
      var ajaxData = new FormData();
      ajaxData.append('email', $('#email_address_input').val());
      ajaxData.append('message', $('#message_content_input').val());
      $('#email_address_input').val('');
      $('#message_content_input').val('');
      $.ajax({
        url: 'model/mailer.php',
        data: ajaxData,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        dataType: 'json',
        success: function(data){
          if(!data['error'])
          {
            $('#success-send').modal('show');
          }
          else
          {
            $('#fail-send').modal('show');
          }
        }
      })
    }
    else
    {
      $('#unvalid-email').modal('show');
    }
});
