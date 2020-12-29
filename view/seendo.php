<?php
  $seendoSectionText = array(
    "seendoSectionSeendoTitle" => "Things to Do", 
    "seendoSectionSkiTitle" => "Ski Resorts", 
    "seendoSectionSkiText" => "The Saanenland region is composed of several well known ski resorts", 
    "seendoSectionHikingTitle" => "Mountain Hiking", 
    "seendoSectionHikingText" => "Enjoy the summer time by hiking in the many trails the region offers", 
    "seendoSectionBikingTitle" => "Mountain Biking", 
    "seendoSectionBikingText" => "Sport addicts will enjoy the biking trails in the surrounding mountains", 
    "seendoSectionWellnessTitle" => "Wellness and Spa", 
    "seendoSectionWellnessText" => "Rest and enjoy yourself in a wellness and spa center in the village of Gstaad", 
    "seendoSectionShoppingTitle" => "Shopping", 
    "seendoSectionShoppingText" => "Visit the shopping streets in the world known village of Gstaad", 
    "seendoSectionMoreText" => "And many more..."
  );

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $seendoSectionText = array(
        "seendoSectionSeendoTitle" => "Activités", 
        "seendoSectionSkiTitle" => "Station de Ski", 
        "seendoSectionSkiText" => "La région du Saanenland est dotée de plusieurs stations de ski", 
        "seendoSectionHikingTitle" => "Randonnée", 
        "seendoSectionHikingText" => "Profitez des nombreux santiers de randonnée qu'offre la région en saison estivale", 
        "seendoSectionBikingTitle" => "Vélo de Montagne", 
        "seendoSectionBikingText" => "Les accros au sport apprécierons les parcours de vélo des montagnes environnantes", 
        "seendoSectionWellnessTitle" => "Bien-être et Spa", 
        "seendoSectionWellnessText" => "Reposez-vous dans l'un des centres bien-être et spa dans la ville de Gstaad", 
        "seendoSectionShoppingTitle" => "Shopping", 
        "seendoSectionShoppingText" => "Visitez les rues commerçantes du centre ville féerique de Gstaad", 
        "seendoSectionMoreText" => "Et bien plus..."
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $seendoSectionText = array(
        "seendoSectionSeendoTitle" => "Aktivitäten", 
        "seendoSectionSkiTitle" => "Skigebiete", 
        "seendoSectionSkiText" => "Das Saanenland besteht aus mehreren bekannten Skigebieten", 
        "seendoSectionHikingTitle" => "Bergwandern", 
        "seendoSectionHikingText" => "Genießen Sie die Sommerzeit, indem Sie auf den vielen Wegen wandern, die die Region bietet", 
        "seendoSectionBikingTitle" => "Mountainbiking", 
        "seendoSectionBikingText" => "Sportbegeisterte werden die Radwege in den umliegenden Bergen genießen", 
        "seendoSectionWellnessTitle" => "Wellness und Spa", 
        "seendoSectionWellnessText" => "Ruhen Sie sich aus und genießen Sie ein Wellness- und Wellnesscenter im Dorf Gstaad", 
        "seendoSectionShoppingTitle" => "Shopping", 
        "seendoSectionShoppingText" => "Besuchen Sie die Einkaufsstraßen im weltbekannten Dorf Gstaad", 
        "seendoSectionMoreText" => "Und viele mehr..."
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      
    }
  }
?>

<section id="seendo_section">
  <div class="container">
    <div class="col-md-14">
      <div id="seendo_section_div">
        <div class="section_title capLetters" id="seendo_title_div">
          <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionSeendoTitle', 'Things to Do'); ?>
        </div>
        <div class="section_content">
          <div class="row">
            <div class="col-md-4">
              <div class="seendo_description_item">
                <div class="seendo_description_title boldLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionSkiTitle', 'Ski Resorts'); ?>
                </div>
                <div class="seendo_description_text italicLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionSkiText', 'The Saanenland region is composed of several well known ski resorts'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="seendo_description_item">
                <div class="seendo_description_title boldLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionHikingTitle', 'Mountain Hiking'); ?>
                </div>
                <div class="seendo_description_text italicLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionHikingText', 'Enjoy the summer time by hiking in the many trails the region offers'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="seendo_description_item">
                <div class="seendo_description_title boldLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionBikingTitle', 'Mountain Biking'); ?>
                </div>
                <div class="seendo_description_text italicLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionBikingText', 'Sport addicts will enjoy the biking trails in the surrounding mountains'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="seendo_description_item">
                <div class="seendo_description_title boldLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionWellnessTitle', 'Wellness and Spa'); ?>
                </div>
                <div class="seendo_description_text italicLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionWellnessText', 'Rest and enjoy yourself in a wellness and spa center in the village of Gstaad'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="seendo_description_item">
                <div class="seendo_description_title boldLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionShoppingTitle', 'Shopping'); ?>
                </div>
                <div class="seendo_description_text italicLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionShoppingText', 'Visit the shopping streets in the world known village of Gstaad'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="seendo_description_item">
                <div class="seendo_description_title">&nbsp;</div>
                <div class="seendo_description_text italicLetters boldLetters">
                  <?php echo printValueGivenKey($seendoSectionText, 'seendoSectionMoreText', 'And many more...'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>