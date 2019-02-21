<?php
  $aboutSectionTextDefault = "Welcome to our website! There is nothing better than an active rest for your well-";
  $aboutSectionTextDefault .= "being and for your health. The Panorama Lauenen Bed and Breakfast offers you all ";
  $aboutSectionTextDefault .= "you need to enjoy the Swiss Alps. The summer hiking trails and the winter cross-";
  $aboutSectionTextDefault .= "country ski run being only a few meters aways, you will refresh your mind throughout ";
  $aboutSectionTextDefault .= "the four seasons!";
  
  $aboutSectionTextDefaultFrfr = "Bienvenue sur note site! Rien de mieux qu'un séjour à la montagne pour se ressourcer.";
  $aboutSectionTextDefaultFrfr .= "La Maison d'Hôtes Panorama Lauenen vous offre tout ce dont vous avez besoin pour ";
  $aboutSectionTextDefaultFrfr .= "profiter des Alpes Suisses. Les sentiers de randonnée en été ainsi que les pistes de ski ";
  $aboutSectionTextDefaultFrfr .= "en hivers étants situés qu'à quelques centaines de mètres, le plaisir est garanti tout au ";
  $aboutSectionTextDefaultFrfr .= "long de l'année!";

  $aboutSectionText = array(
    "aboutSectionAbout" => "About", 
    "aboutSectionText" => $aboutSectionTextDefault
  );

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $aboutSectionText = array(
        "aboutSectionAbout" => "À Propos", 
        "aboutSectionText" => $aboutSectionTextDefaultFrfr
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

<section id="about_section">
  <div class="container">
    <div class="col-md-14">
      <div id="about_section_div">
        <div class="section_title capLetters" id="about_title_div">
          <?php echo printValueGivenKey($aboutSectionText, 'aboutSectionAbout', $aboutSectionTextDefault); ?>
        </div>
        <div class="section_content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3" id="testid">
              <div class="about_description_item">
                <div class="about_description_text italicLetters">
                  <?php echo printValueGivenKey($aboutSectionText, 'aboutSectionText', $aboutSectionTextDefault); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>