<?php
  $serviceSectionText = array(
    "serviceSectionServiceTitle" => "Our Services", 
    "serviceSectionBreakfastTitle" => "Breakfast", 
    "serviceSectionBreakfastText" => "The generous breakfast buffet is composed of a wide selection of homemade and natural products", 
    "serviceSectionHikingTitle" => "Mountain Tour", 
    "serviceSectionHikingText" => "We will be happy to help and advise on mountain hikes in the beautiful surrounding region of Saanenland", 
    "serviceSectionSportTitle" => "Winter Sports", 
    "serviceSectionSportText" => "With pleasure we will help and advise you on winter sports in the ski areas of Lauenen and Gstaad.", 
    "serviceSectionWifiTitle" => "Free Wifi", 
    "serviceSectionWifiText" => "Enjoy the free wifi access anywhere within the accomodation", 
    "serviceSectionMotoTitle" => "Motorcycle Tours", 
    "serviceSectionMotoText" => "On request we will be pleased to organize unforgettable motorcycle tours on the Swiss Alpine roads.", 
    "serviceSectionKitchenTitle" => "Kitchen", 
    "serviceSectionKitchenText" => "We prepare meals for groups upon request"
  );

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $serviceSectionText = array(
        "serviceSectionServiceTitle" => "Nos Services", 
        "serviceSectionBreakfastTitle" => "Petit Déjeuner", 
        "serviceSectionBreakfastText" => "Le généreux buffet du petit déjeuner est composé d'une large sélection de produits frais et faits maison", 
        "serviceSectionHikingTitle" => "Randonnée", 
        "serviceSectionHikingText" => "C’est avec plaisir que nous vous aidons et que nous vous conseillons sur les randonnées en montagne dans les magnifiques environs du Saanenland", 
        "serviceSectionSportTitle" => "Sports d'Hiver", 
        "serviceSectionSportText" => "C’est avec plaisir que nous vous aidons et que nous vous conseillons en matière de sports d'hivers dans les domaines skiables de Lauenen et de Gstaad", 
        "serviceSectionWifiTitle" => "Wifi Gratuit", 
        "serviceSectionWifiText" => "Profitez de l'accès wifi partout dans l'établissement", 
        "serviceSectionMotoTitle" => "Tours en Moto", 
        "serviceSectionMotoText" => "Sur demande nous nous ferons un plaisir d'organiser des tours inoubliables à moto sur les routes alpines suisses.", 
        "serviceSectionKitchenTitle" => "Cuisine", 
        "serviceSectionKitchenText" => "Nous préparons des repas pour groupe, sur demande"
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $serviceSectionText = array(
        "serviceSectionServiceTitle" => "Unsere Leistungen", 
        "serviceSectionBreakfastTitle" => "Frühstück", 
        "serviceSectionBreakfastText" => "Das grosszügige Frühstücksbuffet besteht aus einer großen Auswahl an hausgemachten und natürlichen Produkten", 
        "serviceSectionHikingTitle" => "Bergtour", 
        "serviceSectionHikingText" => "Wir unterstützen und beraten Sie gerne über Bergwanderungen in der schönen Umgebung des Saanenlandes", 
        "serviceSectionSportTitle" => "Wintersport", 
        "serviceSectionSportText" => "Wir unterstützen und beraten Sie gerne über Wintersport in den Skigebieten Lauenen und Gstaad", 
        "serviceSectionWifiTitle" => "Gratis Wifi", 
        "serviceSectionWifiText" => "Gratis Wifi überall in der Unterkunft", 
        "serviceSectionMotoTitle" => "Motorradtouren", 
        "serviceSectionMotoText" => "Gerne organisieren wir für Sie unvergessliche Motorradtouren auf den Schweizer Alpenstraßen", 
        "serviceSectionKitchenTitle" => "Küche", 
        "serviceSectionKitchenText" => "Auf Anfrage bereiten wir Mahlzeiten für Gruppen zu"
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $serviceSectionText = array(
        "serviceSectionServiceTitle" => "Tjenester", 
        "serviceSectionBreakfastTitle" => "Morgenmad", 
        "serviceSectionBreakfastText" => "Morgenmaden består af et stort udvalg af hjemmelavede og naturlige produkter", 
        "serviceSectionHikingTitle" => "Vandreture", 
        "serviceSectionHikingText" => "Vi hjælper og rådgiver om bjergvandringsture i den dejlige omgivelse Saanenland", 
        "serviceSectionSportTitle" => "Vinter Sport", 
        "serviceSectionSportText" => "Vi hjælper og rådgiver om vintersport til skisportsstederne Lauenen og Gstaad", 
        "serviceSectionWifiTitle" => "Gratis Wifi", 
        "serviceSectionWifiText" => "Nyd den gratis wifi-adgang overalt i boligen", 
        "serviceSectionMotoTitle" => "Motorcykelture", 
        "serviceSectionMotoText" => "Vi arrangerer motorcykelture i de schweiziske alper", 
        "serviceSectionKitchenTitle" => "Køkken", 
        "serviceSectionKitchenText" => "Vi forbereder måltider til grupper efter anmodning"
      );
    }
  }
?>

<section id="service_section">
  <div class="container">
    <div class="col-md-14">
      <div id="service_section_div">
        <div class="section_title capLetters" id="service_title_div">
          <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionServiceTitle', 'Our Services'); ?>
        </div>
        <div class="section_content">
          <div class="row">
            <div class="col-md-4">
              <div class="service_description_item">
                <div class="service_description_icon"><img src="img/breakfast_icon.png" width="50" height="50"></div>
                <div class="service_description_title boldLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionBreakfastTitle', 'Breakfast'); ?>
                </div>
                <div class="service_description_text italicLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionBreakfastText', 'The breakfast is composed of a large choice of home made and natural products'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service_description_item">
                <div class="service_description_icon"><img src="img/mountain_icon.png" width="50" height="50"></div>
                <div class="service_description_title boldLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionHikingTitle', 'Mountain Tour'); ?>
                </div>
                <div class="service_description_text italicLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionHikingText', 'We organize mountain hiking tours in the nice surrounding region of Saanenland'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service_description_item">
                <div class="service_description_icon"><img src="img/snowflake_icon.png" width="50" height="50"></div>
                <div class="service_description_title boldLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionSportTitle', 'Winter Sports'); ?>
                </div>
                <div class="service_description_text italicLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionSportText', 'We organize ski passes for the Lauenen and Gstaad ski resorts'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="service_description_item">
                <div class="service_description_icon"><img src="img/wifi_icon.png" width="50" height="50"></div>
                <div class="service_description_title boldLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionWifiTitle', 'Free Wifi'); ?>
                </div>
                <div class="service_description_text italicLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionWifiText', 'Enjoy the free wifi access anywhere within the accomodation'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service_description_item">
                <div class="service_description_icon"><img src="img/map_icon.png" width="50" height="50"></div>
                <div class="service_description_title boldLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionMotoTitle', 'Motorcycle Tours'); ?>
                </div>
                <div class="service_description_text italicLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionMotoText', 'We organize motorcycle tours in the Swiss Alps roads'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service_description_item">
                <div class="service_description_icon"><img src="img/kitchen_icon.png" width="50" height="50"></div>
                <div class="service_description_title boldLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionKitchenTitle', 'Kitchen'); ?>
                </div>
                <div class="service_description_text italicLetters">
                  <?php echo printValueGivenKey($serviceSectionText, 'serviceSectionKitchenText', 'Prepare your own lunch or dinner in the provided kitchen space'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>