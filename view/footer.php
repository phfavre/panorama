<?php
  $footBarText = array(
    "footLinks" => "Links",
    "footHome" => "Home",
    "footAbout" => "About", 
    "footRooms" => "Rooms", 
    "footServices" => "Services",
    "footGallery" => "Gallery",
    "footSeedo" => "See &amp; Do",
    "footContact" => "Contact"
  );

  $footLang = 'en-us';

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $footLang = 'fr-fr';
      $footBarText = array(
        "footLinks" => "Liens",
        "footHome" => "Accueil",
        "footAbout" => "À Propos", 
        "footRooms" => "Chambres", 
        "footServices" => "Services",
        "footGallery" => "Images",
        "footSeedo" => "À Voir",
        "footContact" => "Nous Contacter"
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $footLang = 'de-de';
      $footBarText = array(
        "footLinks" => "Links",
        "footHome" => "Home",
        "footAbout" => "Über Uns", 
        "footRooms" => "Zimmer", 
        "footServices" => "Dienste",
        "footGallery" => "Galerie",
        "footSeedo" => "Aktivitäten",
        "footContact" => "Kontaktiere Uns"
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $footLang = 'da-dk';
      $footBarText = array(
        "footLinks" => "Links",
        "footHome" => "Home",
        "footAbout" => "Om os", 
        "footRooms" => "Værelse", 
        "footServices" => "Tjenester",
        "footGallery" => "Billeder",
        "footSeedo" => "Aktiviteter",
        "footContact" => "Kontakt"
      );
    }
  }
?>

<section id="footer_section">
  <div class="container">
    <div class="col-md-12">
      <div id="footer_section_div">
        <div class="section_content">
          <div class="row">
            <div class="col-md-3">
              <div class="footer_description_item">
                <div id="footer_logo_title">Panorama</div>
                <div class="footer_logo_img_div"><img src="img/logo_trans.png" alt="logo" height="100" width="100" id="footer_logo_img"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_description_item">
                <div class="footer_description_title">
                  <?php echo printValueGivenKey($footBarText, 'footLinks', 'Links'); ?>
                </div>
                <div class="footer_description_content">
                  <ul>
                    <li>
                      <a href="./index?lang=<?php echo $footLang; ?>">
                        <?php echo printValueGivenKey($footBarText, 'footHome', 'Home'); ?>
                      </a>
                    </li>
                    <li>
                      <a href="./index?lang=<?php echo $footLang; ?>#about_section" rel="" id="link_anchor_about_ft" class="anchorLink">
                        <?php echo printValueGivenKey($footBarText, 'footAbout', 'About'); ?>
                      </a>
                    </li>
                    <li>
                      <a href="./index?lang=<?php echo $footLang; ?>#room_section" rel="" id="link_anchor_room_ft" class="anchorLink">
                        <?php echo printValueGivenKey($footBarText, 'footRooms', 'Rooms'); ?>
                      </a>
                    </li>
                    <li>
                      <a href="./index?lang=<?php echo $footLang; ?>#service_section" rel="" id="link_anchor_service_ft" class="anchorLink">
                        <?php echo printValueGivenKey($footBarText, 'footServices', 'Services'); ?>
                      </a>
                    </li>
                    <li>
                      <a href="./index?lang=<?php echo $footLang; ?>#gallery_section" rel="" id="link_anchor_gallery_ft" class="anchorLink">
                        <?php echo printValueGivenKey($footBarText, 'footGallery', 'Gallery'); ?>
                      </a>
                    </li>
                    <li>
                      <a href="./index?lang=<?php echo $footLang; ?>#seendo_section" rel="" id="link_anchor_seendo_ft" class="anchorLink">
                        <?php echo printValueGivenKey($footBarText, 'footSeedo', 'See &amp; Do'); ?>
                      </a>
                    </li>
                    <li>
                      <a href="./index?lang=<?php echo $footLang; ?>#contact_section" rel="" id="link_anchor_contact_ft" class="anchorLink">
                        <?php echo printValueGivenKey($footBarText, 'footContact', 'Contact'); ?>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_description_item">
                <div class="footer_description_title">
                  <?php echo printValueGivenKey($footBarText, 'footAbout', 'About'); ?>
                </div>
                <div class="footer_description_content">
                  <ul>
                    <li><a href="mailto:info@panorama-lauenen.ch">info@panorama-lauenen.ch</a></li>
                    <li>Tel: +41 33 765 31 69</li>
                    <li>& +41 79 347 90 43</li>
                    <li>Lauenenstrasse 5</li>
                    <li>3782 Lauenen b. Gstaad</li>
                    <li>Switzerland</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_description_item">
                <div class="footer_description_title">Social</div>
                <div class="footer_description_content">
                  <div class="footer_icon" id="footer_tripadvisor_icon">
                    <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g1157721-d3806523-Reviews-Pension_Panorama_B_B-Lauenen_Bernese_Oberland_Canton_of_Bern.html"><img src="img/tripadvisor_icon.png" width="35" height="35"></a>
                  </div>
                  <!--<div class="footer_icon" id="footer_booking_icon">
                    <a target="_blank" href="http://www.booking.com/Share-UJPgf1"><img src="img/booking_icon.png" width="35" height="35"></a>
                  </div>-->
                  <div class="footer_icon" id="footer_googleplus_icon">
                    <a target="_blank" href="https://goo.gl/maps/iLBDQ6hqFH92"><img src="img/googleplus_icon.png" width="35" height="35"></a>
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
<div id="footer_footer">
  <div class="container">
    <div class="col-md-12">
      <div id="footer_footer_text">
        &copy; 2020 - Website Designed by <a href="mailto:phf.webcreation@gmail.com">PHF Web Creation</a>
      </div>
    </div>
  </div>
</div>