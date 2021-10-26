<?php
  $seendoSectionText = array(
    "seendoSectionSeendoTitle" => "Things to Do", 
    "seendoSectionSkiTitle" => "Ski Resorts", 
    "seendoSectionSkiText" => "The Saanenland offers several renowned ski resorts with slopes satisfying all levels of skiers", 
    "seendoSectionHikingTitle" => "Mountain Hiking", 
    "seendoSectionHikingText" => "Enjoy the summer time by hiking in the many trails the region offers", 
    "seendoSectionBikingTitle" => "Mountain Biking", 
    "seendoSectionBikingText" => "Sports enthusiasts can take advantage of the many bicycle paths in the surrounding mountains", 
    "seendoSectionWellnessTitle" => "Wellness and Spa", 
    "seendoSectionWellnessText" => "Rest and enjoy a moment of relaxation in one of Gstaad's Wellness and Spa centers", 
    "seendoSectionShoppingTitle" => "Shopping", 
    "seendoSectionShoppingText" => "From traditional handicrafts to high-fashion boutiques, you will find everything in Gstaad", 
    "seendoSectionMoreText" => "And many more..."
  );

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $seendoSectionText = array(
        "seendoSectionSeendoTitle" => "Activités", 
        "seendoSectionSkiTitle" => "Station de Ski", 
        "seendoSectionSkiText" => "La région du Saanenland est dotée de plusieurs stations de ski convenants à tous niveaux", 
        "seendoSectionHikingTitle" => "Randonnée", 
        "seendoSectionHikingText" => "Vous n'aurez que l'embarras du choix quand aux nombreux santiers de randonnée et voies d'escalade qu'offre la région en saison estivale", 
        "seendoSectionBikingTitle" => "Vélo Tout Terrain", 
        "seendoSectionBikingText" => "Les amateurs de sports apprécierons les nombreuses piste cyclables parcourant les montagnes environnantes", 
        "seendoSectionWellnessTitle" => "Bien-être et Spa", 
        "seendoSectionWellnessText" => "Reposez-vous et profitez d'un moment de détente dans l'un des centres de bien-être de Gstaad", 
        "seendoSectionShoppingTitle" => "Shopping", 
        "seendoSectionShoppingText" => "De l'artisanat traditionnel aux boutiques haut de gamme, faites vous plaisir dans les rues commerçantes du centre ville féerique de Gstaad", 
        "seendoSectionMoreText" => "Et bien plus..."
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $seendoSectionText = array(
        "seendoSectionSeendoTitle" => "Aktivitäten", 
        "seendoSectionSkiTitle" => "Skigebiete", 
        "seendoSectionSkiText" => "Das Saanenland bietet mehreren bekannten Skigebieten mit Pisten für jede Art Skitalent.", 
        "seendoSectionHikingTitle" => "Bergwandern", 
        "seendoSectionHikingText" => "Im Sommer haben Sie die Qual der Wahl denn das Saanenland verfügt über unzählige Wander- und Klettermöglichkeiten.", 
        "seendoSectionBikingTitle" => "Mountainbiking", 
        "seendoSectionBikingText" => "Sportbegeisterte können die vielen Radwege in den umliegenden Bergen genießen.", 
        "seendoSectionWellnessTitle" => "Wellness und Spa", 
        "seendoSectionWellnessText" => "Ruhen Sie sich aus und genießen Sie einen erholsamen Moment in einem der Wellnesscenter Gstaad.", 
        "seendoSectionShoppingTitle" => "Shopping", 
        "seendoSectionShoppingText" => "Vom traditionellen Handwerk bis zur Top Fashion Boutique finden Sie in Gstaad alles.", 
        "seendoSectionMoreText" => "Und viele mehr..."
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $seendoSectionText = array(
        "seendoSectionSeendoTitle" => "Aktiviteter", 
        "seendoSectionSkiTitle" => "Skisportssteder", 
        "seendoSectionSkiText" => "Saanenland-regionen består af flere kendte skisportssteder", 
        "seendoSectionHikingTitle" => "Bjergvandring", 
        "seendoSectionHikingText" => "Nyd sommeren ved at vandre på de mange stier, regionen tilbyder", 
        "seendoSectionBikingTitle" => "Mountainbiking", 
        "seendoSectionBikingText" => "Sportsmisbrugere vil nyde cykelstierne i de omkringliggende bjerge", 
        "seendoSectionWellnessTitle" => "Wellness og Spa", 
        "seendoSectionWellnessText" => "Hvil og hyg dig i et wellness- og spa-center i landsbyen Gstaad", 
        "seendoSectionShoppingTitle" => "Shopping", 
        "seendoSectionShoppingText" => "Besøg shoppinggaderne i den verdenskendte landsby Gstaad", 
        "seendoSectionMoreText" => "Og mange flere..."
      );
    }
  }
?>

<section id="seendo_section">
  <div class="container">
    <div class="col-md-12">
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