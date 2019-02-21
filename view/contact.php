<?php
  $contactSectionText = array(
    "contactSectionContactTitle" => "Contact Us"
  );

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $contactSectionText = array(
        "contactSectionContactTitle" => "Contactez-nous"
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      
    }
  }
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbwgSVSXNi67Eg7XGOYcpFxUDPFz3XmIg&callback=initialize" async defer></script>
<script>
  function initialize()
  {
    var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = 
    {
      center: new google.maps.LatLng(46.424838, 7.321966),
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false,
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(46.424838, 7.321966),
      map: map,
      title: "Panorama B&B, Lauenen"
    });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<section id="contact_section">
  <div class="container">
    <div class="col-md-14">
      <div id="contact_section_div">
        <div class="section_title capLetters" id="contact_title_div">
          <?php echo printValueGivenKey($contactSectionText, 'contactSectionContactTitle', 'Contact Us'); ?>
        </div>
        <div class="section_content">
          <div class="row">
            <div class="col-md-4">
              <div class="contact_description_item italicLetters" id="contact_description_item_email">
                <a href="mailto:info@panorama-lauenen.ch">info@panorama-lauenen.ch</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact_description_item italicLetters" id="contact_description_item_phone">
                Lauenenstrasse 5, 3782 Lauenen b. Gstaad
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact_description_item italicLetters" id="contact_description_item_address">
                Tel: +41 33 765 31 69
              </div>
            </div>
          </div>
        </div>

        <!--<div id="contact_form_div">
          <div id="demo_form">
            <div class="row">
              <div class="col-md-6" id="contact_form_name_input_div">
                <input class="form-control contact_request_input" rows="1" id="name_input" placeholder="Your Name">
              </div>
              <div class="col-md-6" id="contact_form_email_input_div">
                <input class="form-control contact_request_input" rows="1" id="email_address_input" placeholder="Your Email Address">
              </div>
            </div>
            <div id="contact_form_subject_input_div">
              <input class="form-control contact_request_input" rows="1" id="message_subject_input" placeholder="Subject">
            </div>
            <div id="contact_form_msg_input_div">
              <textarea class="form-control contact_request_input" rows="5" id="message_content_input" placeholder="Message"></textarea>
            </div>
            <div id="contact_form_button_div">
              <button type="button" class="btn" id="contact_form_button">Send</button>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>
  <div id="map_canvas"></div>
</section>

<!--
<div class="modal fade" id="success-send" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Thank you</h4>
      </div>
      <div class="modal-body">
        <p>Thank you for your message, we will come back to you shortly!</p>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
          <button type="button" class="btn-modal btn-block btn-ok" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="fail-send" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Fail</h4>
      </div>
      <div class="modal-body">
        <p>There was a problem with your submission. We couldn't receive your message.</p>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
          <button type="button" class="btn-modal btn-block btn-ok" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="unvalid-email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Fail</h4>
      </div>
      <div class="modal-body">
        <p>Please enter a valid email address.</p>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
          <button type="button" class="btn-modal btn-block btn-ok" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>
-->