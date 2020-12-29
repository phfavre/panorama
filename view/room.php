<?php
  $roomsSectionTextDefault = "Panorama Lauenen B&amp;B has in total 7 double rooms. One double room has a ";
  $roomsSectionTextDefault .= "balcony with a fantastic view on the Swiss Alps. There are also 2 bathrooms shared ";
  $roomsSectionTextDefault .= "among guests.";
  
  $roomsSectionTextDefaultFrfr = "La Maison d'Hôtes Panorama Lauenen possède au total 7 chambres doubles. Une chambre double ";
  $roomsSectionTextDefaultFrfr .= "est dotée d'un balcon avec vue fantastique sur les Alpes Suisses. Il y'a également 2 salles d'eau ";
  $roomsSectionTextDefaultFrfr .= "partagées.";
  
  $roomsSectionTextDefaultDede = "Das Panorama Lauenen B&amp;B verfügt über insgesamt 7 Doppelzimmer. Ein Doppelzimmer ";
  $roomsSectionTextDefaultDede .= "hat einen Balkon mit fantastischem Blick auf die Schweizer Alpen. Es gibt auch 2 Badezimmer, ";
  $roomsSectionTextDefaultDede .= "die sich die Gäste teilen.";
  
  $roomsSectionTextDefaultDadk = "Panorama Lauenen B&amp;B har i alt 7 dobbeltværelser. Et dobbeltværelse har balkon ";
  $roomsSectionTextDefaultDadk .= "med en fantastisk udsigt over de schweiziske alper. Der er også 2 ";
  $roomsSectionTextDefaultDadk .= "badeværelser, der deles blandt gæsterne.";
  
  $roomsSectionText = array(
    "roomsSectionRooms" => "Our Rooms", 
    "roomsSectionText" => $roomsSectionTextDefault,
    "roomsSectionBookRoom" => 'Book a Room'
  );

  $roomsLang = 'en-us';

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $roomsLang = 'fr-fr';
      $roomsSectionText = array(
        "roomsSectionRooms" => "Nos Chambres", 
        "roomsSectionText" => $roomsSectionTextDefaultFrfr,
        "roomsSectionBookRoom" => 'Réserver'
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $roomsLang = 'de-de';
      $roomsSectionText = array(
        "roomsSectionRooms" => "Unsere Zimmer", 
        "roomsSectionText" => $roomsSectionTextDefaultDede,
        "roomsSectionBookRoom" => 'Buchen'
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $roomsLang = 'da-dk';
      $roomsSectionText = array(
        "roomsSectionRooms" => "Værelse", 
        "roomsSectionText" => $roomsSectionTextDefaultDadk,
        "roomsSectionBookRoom" => 'Reservere'
      );
    }
  }
?>

<section id="room_section">
  <div class="container">
    <div class="col-md-14">
      <div class="section_content">
        <div id="room_section_div">
          <div id="room_img_div" class="cd-fixed-bg cd-bg-1 background">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="room_description_item">
                  <div class="room_description_title capLetters">
                    <?php echo printValueGivenKey($roomsSectionText, 'roomsSectionRooms', 'Our Rooms'); ?>
                  </div>
                  <div class="room_description_text italicLetters">
                    <?php echo printValueGivenKey($roomsSectionText, 'roomsSectionText', $roomsSectionTextDefault); ?>
                  </div>
                  <div id="room_section_button_div">
                    <a href="./ourrooms?lang=<?php echo $roomsLang; ?>" type="button" class="btn" id="room_section_button">
                      <?php echo printValueGivenKey($roomsSectionText, 'roomsSectionBookRoom', 'Book a Room'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
