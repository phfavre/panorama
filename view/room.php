<?php
  $roomsSectionTextDefault = "Panorama Lauenen B&amp;B has in total 4 double rooms. One double room has a ";
  $roomsSectionTextDefault .= "balcony with a fantastic view on the Swiss Alps. There are also 2 bathrooms shared ";
  $roomsSectionTextDefault .= "among guests.";
  
  $roomsSectionTextDefaultFrfr = "La Maison d'Hôtes Panorama Lauenen possède au total 4 chambres doubles. Une chambre double ";
  $roomsSectionTextDefaultFrfr .= "est dotée d'un balcon avec vue fantastique sur les Alpes Suisses. Il y'a également 2 salles d'eau ";
  $roomsSectionTextDefaultFrfr .= "partagées.";

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
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $roomsLang = 'da-dk';
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
