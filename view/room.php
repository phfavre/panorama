<?php
  $roomsSectionTextDefault = "The Panorama Lauenen B&amp;B has a total of 7 double rooms. One double room has a ";
  $roomsSectionTextDefault .= "balcony with a fantastic view on the Swiss Alps. On each floor there is a bathroom, which is shared ";
  $roomsSectionTextDefault .= "by the guests.";
  
  $roomsSectionTextDefaultFrfr = "Le B&amp;B Panorama Lauenen dispose d'un total de 7 chambres doubles. Une chambre double ";
  $roomsSectionTextDefaultFrfr .= "est dotée d'un balcon offrant une vue fantastique sur les Alpes Suisses. Il y'a également une salle d'eau ";
  $roomsSectionTextDefaultFrfr .= "partagée par étage.";
  
  $roomsSectionTextDefaultDede = "Das Panorama Lauenen B&amp;B verfügt über 7 Doppelzimmer. Ein Zimmer mit Balkon das einen ";
  $roomsSectionTextDefaultDede .= "fantastischen Blick auf die Alpen offeriert. ";
  $roomsSectionTextDefaultDede .= "Auf jeder Etage befindet sich ein Badezimmer, das sich die Gäste teilen.";
  
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
