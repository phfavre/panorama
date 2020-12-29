<?php
  $serviceSectionText = array(
    "serviceSectionServiceTitle" => "Our Services", 
    "serviceSectionBreakfastTitle" => "Breakfast", 
    "serviceSectionBreakfastText" => "The breakfast is composed of a large choice of home made and natural products", 
    "serviceSectionHikingTitle" => "Mountain Tour", 
    "serviceSectionHikingText" => "We assist and advise concerning mountain hiking tours in the nice surrounding region of Saanenland", 
    "serviceSectionSportTitle" => "Winter Sports", 
    "serviceSectionSportText" => "We assist and advise concerning winter sports for the Lauenen and Gstaad ski resorts", 
    "serviceSectionWifiTitle" => "Free Wifi", 
    "serviceSectionWifiText" => "Enjoy the free wifi access anywhere within the accomodation", 
    "serviceSectionMotoTitle" => "Motorcycle Tours", 
    "serviceSectionMotoText" => "We organize motorcycle tours in the Swiss Alps roads", 
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
        "serviceSectionBreakfastText" => "Le petit déjeuner est composé d'un large choix de produits frais et faits maison", 
        "serviceSectionHikingTitle" => "Randonnée", 
        "serviceSectionHikingText" => "Nous assistons et conseillons concernant les randonnées en montagne dans la belle région de Saanenland", 
        "serviceSectionSportTitle" => "Sports d'Hiver", 
        "serviceSectionSportText" => "Nous assistons et conseillons en matière de sports d'hivers pour les stations de Lauenen et de Gstaad", 
        "serviceSectionWifiTitle" => "Wifi Gratuit", 
        "serviceSectionWifiText" => "Profitez de l'accès wifi partout dans l'établissement", 
        "serviceSectionMotoTitle" => "Tours en Moto", 
        "serviceSectionMotoText" => "Nous organisons des tours en moto sur les belles routes des Alpes Suisses", 
        "serviceSectionKitchenTitle" => "Cuisine", 
        "serviceSectionKitchenText" => "Nous préparons des repas pour groupe, sur demande"
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