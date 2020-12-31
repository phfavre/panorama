<?php
  $aboutSectionTextDefault = "Welcome to our website! There is nothing better than an active rest for your well-being ";
  $aboutSectionTextDefault .= "and health. The Bed &amp; Breakfast Panorama Lauenen offers you everything ";
  $aboutSectionTextDefault .= "you need to enjoy the Swiss Alps. The summer hiking trails and idyllic lake of Lauenen, ";
  $aboutSectionTextDefault .= "the winter ski slopes and cross-country ski trails, as well as the well-known village of Gstaad ";
  $aboutSectionTextDefault .= "being only a few minutes away, you will refresh your mind throughout ";
  $aboutSectionTextDefault .= "the four seasons!";
  
  $aboutSectionTextDefaultFrfr = "Bienvenue sur note site! Rien de mieux qu'un séjour à la montagne pour se ressourcer. ";
  $aboutSectionTextDefaultFrfr .= "Le Bed &amp; Breakfast Panorama Lauenen vous offre tout ce dont vous avez besoin pour ";
  $aboutSectionTextDefaultFrfr .= "profiter des Alpes Suisses. Les sentiers de randonnée et le lac idyllique de Lauenen en été, ";
  $aboutSectionTextDefaultFrfr .= "les pistes de ski et de ski de fond en hivers, ainsi que le village mondialement connu de Gstaad, ";
  $aboutSectionTextDefaultFrfr .= "ne sont qu'à quelques minutes du Panorama B&amp;B. Le bon choix pour une évasion du quotidien, ";
  $aboutSectionTextDefaultFrfr .= "détente et bien-être garantis en toutes saisons !";
  
  $aboutSectionTextDefaultDede = "Willkommen auf unserer Webseite! Es gibt nichts Besseres als eine aktive Erholung in den ";
  $aboutSectionTextDefaultDede .= "Bergen für Ihr Wohlbefinden und Ihre Gesundheit. Das Bed &amp; Breakfast Panorama Lauenen ";
  $aboutSectionTextDefaultDede .= "bietet Ihnen alles, was Sie brauchen, um die Schweizer Alpen zu genießen. Die Sommer-wanderwege, ";
  $aboutSectionTextDefaultDede .= "der idyllische Lauenensee, die Skipisten und Langlaufloipe sowie der prominente ";
  $aboutSectionTextDefaultDede .= "Kurort Gstaad sind nur wenige Minuten vom B&amp;B Panorama entfernt. Das Richtige für eine ";
  $aboutSectionTextDefaultDede .= "Alltagsevasion, Erholung und Gedankenauffrischung garantiert zu allen Jahreszeiten!";
  
  $aboutSectionTextDefaultDadk = "Velkommen til vores hjemmeside! Der er intet bedre end en aktiv hvile for dit velbefindende og ";
  $aboutSectionTextDefaultDadk .= "for dit helbred. Panorama Lauenen Bed and Breakfast tilbyder dig alt hvad du behøver for ";
  $aboutSectionTextDefaultDadk .= "at nyde de schweiziske alper. Om sommerens vandrestier og vinterens ";
  $aboutSectionTextDefaultDadk .= "langrendsløb kun få meter væk, vil du opfriske ";
  $aboutSectionTextDefaultDadk .= "dit sind gennem de fire årstider!";

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
      $aboutSectionText = array(
        "aboutSectionAbout" => "Über Uns", 
        "aboutSectionText" => $aboutSectionTextDefaultDede
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $aboutSectionText = array(
        "aboutSectionAbout" => "Om os", 
        "aboutSectionText" => $aboutSectionTextDefaultDadk
      );
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