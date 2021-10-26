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
      $contactSectionText = array(
        "contactSectionContactTitle" => "Kontaktieren Sie Uns"
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $contactSectionText = array(
        "contactSectionContactTitle" => "Kontakt"
      );
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
    <div class="col-md-12">
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
                Tel: +41 33 765 31 69 & +41 79 347 90 43
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="map_canvas"></div>
</section>
