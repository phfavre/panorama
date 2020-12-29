<?php
  $navBarText = array(
    "navHome" => "Home",
    "navAbout" => "About", 
    "navRooms" => "Rooms", 
    "navServices" => "Services",
    "navGallery" => "Gallery",
    "navSeedo" => "See &amp; Do",
    "navContact" => "Contact",
    "navBookroom" => "Book a Room"
  );

  $navLang = 'en-us';

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $navLang = 'fr-fr';
      $navBarText = array(
        "navHome" => "Accueil",
        "navAbout" => "À Propos", 
        "navRooms" => "Chambres", 
        "navServices" => "Services",
        "navGallery" => "Images",
        "navSeedo" => "À Voir",
        "navContact" => "Contacts",
        "navBookroom" => "Réserver"
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $navLang = 'de-de';
      $navBarText = array(
        "navHome" => "Home",
        "navAbout" => "Über Uns", 
        "navRooms" => "Zimmer", 
        "navServices" => "Dienste",
        "navGallery" => "Galerie",
        "navSeedo" => "Aktivitäten",
        "navContact" => "Kontakt",
        "navBookroom" => "Buchen"
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $navLang = 'da-dk';
      $navBarText = array(
        "navHome" => "Home",
        "navAbout" => "Om os", 
        "navRooms" => "Værelse", 
        "navServices" => "Tjenester",
        "navGallery" => "Billeder",
        "navSeedo" => "Aktiviteter",
        "navContact" => "Kontakt",
        "navBookroom" => "Reservere"
      );
    }
  }
?>

<div class="navbar" id="my_navbar">
  <div class="container">
    <div class="col-md-14">
      <div class="navbar_list">
        <ul class="topnav" id="myTopnav">
          <li class="nav_dropdown_el">
            <div class="nav_logo_img_div"><span id="nav_logo_helper"></span><img src="img/logo_trans.png" alt="logo" id="nav_logo_img" width="40"></div>
          </li>
          <li class="nav_dropdown_el">
            <a href="./index?lang=<?php echo $navLang; ?>" class="capLetters">
              <?php echo printValueGivenKey($navBarText, 'navHome', 'Home'); ?>
            </a>
          </li>
          <li class="nav_dropdown_el">
            <a href="./index?lang=<?php echo $navLang; ?>#about_section" rel="" id="link_anchor_about_nb" class="anchorLink capLetters">
              <?php echo printValueGivenKey($navBarText, 'navAbout', 'About'); ?>
            </a>
          </li>
          <li class="nav_dropdown_el">
            <a href="./index?lang=<?php echo $navLang; ?>#room_section" rel="" id="link_anchor_rooms_nb" class="anchorLink capLetters">
              <?php echo printValueGivenKey($navBarText, 'navRooms', 'Rooms'); ?>
            </a>
          </li>
          <li class="nav_dropdown_el">
            <a href="./index?lang=<?php echo $navLang; ?>#service_section" rel="" id="link_anchor_services_nb" class="anchorLink capLetters">
              <?php echo printValueGivenKey($navBarText, 'navServices', 'Services'); ?>
            </a>
          </li>
          <li class="nav_dropdown_el">
            <a href="./index?lang=<?php echo $navLang; ?>#gallery_section" rel="" id="link_anchor_gallery_nb" class="anchorLink capLetters">
              <?php echo printValueGivenKey($navBarText, 'navGallery', 'Gallery'); ?>
            </a>
          </li>
          <li class="nav_dropdown_el">
            <a href="./index?lang=<?php echo $navLang; ?>#seendo_section" rel="" id="link_anchor_seendo_nb" class="anchorLink capLetters">
              <?php echo printValueGivenKey($navBarText, 'navSeedo', 'See &amp; Do'); ?>
            </a>
          </li>
          <li class="nav_dropdown_el">
            <a href="./index?lang=<?php echo $navLang; ?>#contact_section" rel="" id="link_anchor_contact_nb" class="anchorLink capLetters">
              <?php echo printValueGivenKey($navBarText, 'navContact', 'Contact'); ?>
            </a>
          </li>
          <li class="nav_dropdown_el">
            <a href="./ourrooms?lang=<?php echo $navLang; ?>" rel="" id="link_anchor_bookaroom_nb" class="anchorLink">
              <span class="navItemBorder">
                <?php echo printValueGivenKey($navBarText, 'navBookroom', 'Book a Room'); ?>
              </span>
            </a>
          </li>
          <li class="nav_dropdown_el topnav_lang_li">
            <?php
              $enusQueryString = addOrUpdateUrlParam('lang', 'en-us');
              $frfrQueryString = addOrUpdateUrlParam('lang', 'fr-fr');
              $dedeQueryString = addOrUpdateUrlParam('lang', 'de-de');
              $dadkQueryString = addOrUpdateUrlParam('lang', 'da-dk');
            ?>
            <a href="<?php echo $enusQueryString; ?>" class="topnav_lang_link <?php if($navLang == 'en-us') echo 'lang_active'; ?>"><img src="img/flag_eng.png" height="16px" width="16px" /></a>
            <a href="<?php echo $frfrQueryString; ?>" class="topnav_lang_link <?php if($navLang == 'fr-fr') echo 'lang_active'; ?>"><img src="img/flag_france.png" height="16px" width="16px" /></a>
            <br />
            <a href="<?php echo $dedeQueryString; ?>" class="topnav_lang_link <?php if($navLang == 'de-de') echo 'lang_active'; ?>"><img src="img/flag_germany.png" height="16px" width="16px" /></a>
            <a href="<?php echo $dadkQueryString; ?>" class="topnav_lang_link <?php if($navLang == 'da-dk') echo 'lang_active'; ?>"><img src="img/flag_denmark.png" height="16px" width="16px" /></a>
          </li>
          <li class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="myNavbar()"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
        </ul>
      </div>
    </div>
  </div>
</div>