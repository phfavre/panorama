<?php
  $guestreviewSectionText = array(
    "guestreviewSectionGuestReviewTitle" => "Guests Reviews", 
    "guestreviewSectionGuestReview1" => '"Host and hostess are super! Very friendly and very helpful. The studio was large and very comfortable. The entire house is charming and very sweetly decorated."<br>(Suzann, Booking.com)', 
    "guestreviewSectionGuestReview2" => '"Excellent view and excellent hosts!"<br>(Ramya, Google Reviews)', 
    "guestreviewSectionGuestReview3" => '"Staff are excellent and went out of their way to make sure I had a wonderful stay!"<br>(Jack, Booking.com)'
  );

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $guestreviewSectionText = array(
        "guestreviewSectionGuestReviewTitle" => "Ce que nos Hôtes pensent", 
        "guestreviewSectionGuestReview1" => '"L\'emplacement est très palpitant y compris la vue géniale. L\'hôte et son mari sont adorables. Ils se mettent en quatre pour rendre votre séjour extrêmement confortable et inoubliable"<br>(Dominique, Booking.com)', 
        "guestreviewSectionGuestReview2" => '"Intérieur accueillant, décoré avec goût, beaucoup de bois, équipements nouveaux. Couple propriétaire très sympa et accueillant"<br>(Jacqueline, Booking.com)', 
        "guestreviewSectionGuestReview3" => '"Bon petit déjeuner, belle vue depuis la chambre, très propre"<br>(Marie, Booking.com)'
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

<section id="guestreview_section">
  <div class="container">
    <div class="col-md-14">
      <div class="section_content">
        <div id="guestreview_section_div">
          <div id="guestreview_img_div" class="cd-fixed-bg cd-bg-1 background">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="guestreview_description_item">
                  <div class="guestreview_description_title capLetters">
                    <?php echo printValueGivenKey($guestreviewSectionText, 'guestreviewSectionGuestReviewTitle', 'Guests Reviews'); ?>
                  </div>
                  <div class="guestreview_description_icon capLetters"><img src="img/guillemet_icon.png" width="15" height="15"></div>
                  <div class="single-item" id="guestreview_carousel">
                    <div class="guestreview_description_text italicLetters sel_elem">
                      <?php echo printValueGivenKey($guestreviewSectionText, 'guestreviewSectionGuestReview1', '"Lovely location with great views. We stayed in studio, it was immaculate. Great shower with shower gel and hair stuff. There was tea, coffee and sugar. A little shop down the road sold lots as well. Loads of walks right on doorstep"'); ?>
                    </div>
                    <div class="guestreview_description_text italicLetters sel_elem">
                      <?php echo printValueGivenKey($guestreviewSectionText, 'guestreviewSectionGuestReview2', '"Everything is excellent. The best hotel in the area!"'); ?>
                    </div>
                    <div class="guestreview_description_text italicLetters sel_elem">
                      <?php echo printValueGivenKey($guestreviewSectionText, 'guestreviewSectionGuestReview3', '"Really really awesome place!! Breakfast was super generous and welcome was really friendly. I cannot find a fault to our stay"'); ?>
                    </div>
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