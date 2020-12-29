<?php
  $gallerySectionText = array(
    "gallerySectionGalleryTitle" => "Gallery", 
    "gallerySectionVillagePhoto" => "Lauenen Village", 
    "gallerySectionGuestroomPhoto" => "Guestroom", 
    "gallerySectionDiningroomPhoto" => "Dinning Hall", 
    "gallerySectionKitchenettePhoto" => "Kitchenette", 
    "gallerySectionBathroomPhoto" => "Bathroom"
  );

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $gallerySectionText = array(
        "gallerySectionGalleryTitle" => "Images", 
        "gallerySectionVillagePhoto" => "Village de Lauenen", 
        "gallerySectionGuestroomPhoto" => "Chambre", 
        "gallerySectionDiningroomPhoto" => "Salle à Manger", 
        "gallerySectionKitchenettePhoto" => "Kitchenette", 
        "gallerySectionBathroomPhoto" => "Salle d'Eau"
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $gallerySectionText = array(
        "gallerySectionGalleryTitle" => "Galerie", 
        "gallerySectionVillagePhoto" => "Lauenen Dorf", 
        "gallerySectionGuestroomPhoto" => "Zimmer", 
        "gallerySectionDiningroomPhoto" => "Speisesaal", 
        "gallerySectionKitchenettePhoto" => "Kochnische", 
        "gallerySectionBathroomPhoto" => "Badezimmer"
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      
    }
  }
?>

<section id="gallery_section">
  <div class="container">
    <div class="col-md-14">
      <div id="gallery_section_div">
        <div class="section_title capLetters">
          <?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGalleryTitle', 'Gallery'); ?>
        </div>
        <div class="section_content">
          <div id="gallery_section_img_div">
            <div class="row">
              <div class="col-md-4">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_03.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_03.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4">
                <div class="diapo_imgs_class_div"><a href="img/room_01.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_01.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4">
                <div class="diapo_imgs_class_div"><a href="img/eatingroom_01.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionDiningroomPhoto', 'Dinning Hall'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/eatingroom_01.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/room_02.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_02.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/room_03.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_03.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/room_04.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_04.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/room_05.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_05.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/room_06.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_06.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/room_07.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_07.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/room_08.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionGuestroomPhoto', 'Guestroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/room_08.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/eatingroom_02.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionDiningroomPhoto', 'Dinning Hall'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/eatingroom_02.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/eatingroom_03.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionDiningroomPhoto', 'Dinning Hall'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/eatingroom_03.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/eatingroom_04.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionDiningroomPhoto', 'Dinning Hall'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/eatingroom_04.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/kitchen_01.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionKitchenettePhoto', 'Kitchenette'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/kitchen_01.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/kitchen_02.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionKitchenettePhoto', 'Kitchenette'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/kitchen_02.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/kitchen_03.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionKitchenettePhoto', 'Kitchenette'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/kitchen_03.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/kitchen_04.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionKitchenettePhoto', 'Kitchenette'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/kitchen_04.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/bathroom_01.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionBathroomPhoto', 'Bathroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/bathroom_01.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/bathroom_02.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionBathroomPhoto', 'Bathroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/bathroom_02.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/bathroom_03.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionBathroomPhoto', 'Bathroom'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/bathroom_03.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_01.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_01.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_02.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_02.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_04.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_04.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_05.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_05.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_06.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_06.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_07.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_07.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/lauenen_08.jpg" data-lightbox="Article gallery photos" data-title="<?php echo printValueGivenKey($gallerySectionText, 'gallerySectionVillagePhoto', 'Lauenen Village'); ?>"><div class="diapo_imgs_class" style="background-image: url(img/lauenen_08.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/house_01.jpg" data-lightbox="Article gallery photos" data-title="Panorama B&B"><div class="diapo_imgs_class" style="background-image: url(img/house_01.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/house_02.jpg" data-lightbox="Article gallery photos" data-title="Panorama B&B"><div class="diapo_imgs_class" style="background-image: url(img/house_02.jpg)" id="gallery_section_img"></div></a></div>
              </div>
              <div class="col-md-4 hiddenPic">
                <div class="diapo_imgs_class_div"><a href="img/house_03.jpg" data-lightbox="Article gallery photos" data-title="Panorama B&B"><div class="diapo_imgs_class" style="background-image: url(img/house_03.jpg)" id="gallery_section_img"></div></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
