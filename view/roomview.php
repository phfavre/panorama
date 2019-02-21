
<?php
  $roomviewText = array(
    "spitzhorn" => array(
        "roomviewRoomName" => "Spitzhorn", 
        "roomviewImg1Path" => "img/spitzhorn_01.jpg", 
        "roomviewImg2Path" => "img/spitzhorn_02.jpg", 
        "roomviewImg3Path" => "img/spitzhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 55", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 2:00PM", 
        "roomviewCheckOut" => "Check-Out: 12:00PM"
    ), 
    "wildhorn" => array(
        "roomviewRoomName" => "Wildhorn", 
        "roomviewImg1Path" => "img/wildhorn_01.jpg", 
        "roomviewImg2Path" => "img/wildhorn_02.jpg", 
        "roomviewImg3Path" => "img/wildhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 55", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 2:00PM", 
        "roomviewCheckOut" => "Check-Out: 12:00PM"
    ), 
    "geltenhorn" => array(
        "roomviewRoomName" => "Geltenhorn", 
        "roomviewImg1Path" => "img/geltenhorn_01.jpg", 
        "roomviewImg2Path" => "img/geltenhorn_02.jpg", 
        "roomviewImg3Path" => "img/geltenhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 55", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 2:00PM", 
        "roomviewCheckOut" => "Check-Out: 12:00PM"
    ), 
    "niesenhorn" => array(
        "roomviewRoomName" => "Niesenhorn", 
        "roomviewImg1Path" => "img/niesenhorn_01.jpg", 
        "roomviewImg2Path" => "img/niesenhorn_02.jpg", 
        "roomviewImg3Path" => "img/niesenhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 55", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 2:00PM", 
        "roomviewCheckOut" => "Check-Out: 12:00PM"
    ), 
    "wasserngrat" => array(
        "roomviewRoomName" => "Wasserngrat", 
        "roomviewImg1Path" => "img/wasserngrat_01.jpg", 
        "roomviewImg2Path" => "img/wasserngrat_02.jpg", 
        "roomviewImg3Path" => "img/wasserngrat_03.jpg", 
        "roomviewRoomPrice" => "CHF 55", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 2:00PM", 
        "roomviewCheckOut" => "Check-Out: 12:00PM"
    ), 
    "gride" => array(
        "roomviewRoomName" => "Gride", 
        "roomviewImg1Path" => "img/gride_01.jpg", 
        "roomviewImg2Path" => "img/gride_02.jpg", 
        "roomviewImg3Path" => "img/gride_03.jpg", 
        "roomviewRoomPrice" => "CHF 55", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 2:00PM", 
        "roomviewCheckOut" => "Check-Out: 12:00PM"
    ), 
    "rothorn" => array(
        "roomviewRoomName" => "Rothorn", 
        "roomviewImg1Path" => "img/rothorn_01.jpg", 
        "roomviewImg2Path" => "img/rothorn_02.jpg", 
        "roomviewImg3Path" => "img/rothorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 55", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 2:00PM", 
        "roomviewCheckOut" => "Check-Out: 12:00PM"
    ), 
    "generic" => array(
        "roomviewRoomPriceFrom" => "From", 
        "roomviewPerNight" => "Per Night", 
        "roomviewBookInfo" => "Book Info", 
        "roomviewProperties" => "Properties:", 
        "roomviewAmenities" => "Amenities:", 
        "roomviewCheckInOut" => "Check In and Out:"
    )
  );

  $roomviewLang = 'en-us';

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $roomviewLang = 'fr-fr';
      $roomviewText = array(
        "spitzhorn" => array(
            "roomviewRoomName" => "Spitzhorn", 
            "roomviewImg1Path" => "img/spitzhorn_01.jpg", 
            "roomviewImg2Path" => "img/spitzhorn_02.jpg", 
            "roomviewImg3Path" => "img/spitzhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 55", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 14:00 heures", 
            "roomviewCheckOut" => "Check-Out: 12:00 heures"
        ), 
        "wildhorn" => array(
            "roomviewRoomName" => "Wildhorn", 
            "roomviewImg1Path" => "img/wildhorn_01.jpg", 
            "roomviewImg2Path" => "img/wildhorn_02.jpg", 
            "roomviewImg3Path" => "img/wildhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 55", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 14:00 heures", 
            "roomviewCheckOut" => "Check-Out: 12:00 heures"
        ), 
        "geltenhorn" => array(
            "roomviewRoomName" => "Geltenhorn", 
            "roomviewImg1Path" => "img/geltenhorn_01.jpg", 
            "roomviewImg2Path" => "img/geltenhorn_02.jpg", 
            "roomviewImg3Path" => "img/geltenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 55", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 14:00 heures", 
            "roomviewCheckOut" => "Check-Out: 12:00 heures"
        ), 
        "niesenhorn" => array(
            "roomviewRoomName" => "Niesenhorn", 
            "roomviewImg1Path" => "img/niesenhorn_01.jpg", 
            "roomviewImg2Path" => "img/niesenhorn_02.jpg", 
            "roomviewImg3Path" => "img/niesenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 55", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 14:00 heures", 
            "roomviewCheckOut" => "Check-Out: 12:00 heures"
        ), 
        "wasserngrat" => array(
            "roomviewRoomName" => "Wasserngrat", 
            "roomviewImg1Path" => "img/wasserngrat_01.jpg", 
            "roomviewImg2Path" => "img/wasserngrat_02.jpg", 
            "roomviewImg3Path" => "img/wasserngrat_03.jpg", 
            "roomviewRoomPrice" => "CHF 55", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 14:00 heures", 
            "roomviewCheckOut" => "Check-Out: 12:00 heures"
        ), 
        "gride" => array(
            "roomviewRoomName" => "Gride", 
            "roomviewImg1Path" => "img/gride_01.jpg", 
            "roomviewImg2Path" => "img/gride_02.jpg", 
            "roomviewImg3Path" => "img/gride_03.jpg", 
            "roomviewRoomPrice" => "CHF 55", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 14:00 heures", 
            "roomviewCheckOut" => "Check-Out: 12:00 heures"
        ), 
        "rothorn" => array(
            "roomviewRoomName" => "Rothorn", 
            "roomviewImg1Path" => "img/rothorn_01.jpg", 
            "roomviewImg2Path" => "img/rothorn_02.jpg", 
            "roomviewImg3Path" => "img/rothorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 55", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 14:00 heures", 
            "roomviewCheckOut" => "Check-Out: 12:00 heures"
        ), 
        "generic" => array(
            "roomviewRoomPriceFrom" => "A partir de", 
            "roomviewPerNight" => "Par Nuit", 
            "roomviewBookInfo" => "Plus d'info", 
            "roomviewProperties" => "Propriété:", 
            "roomviewAmenities" => "Équipements:", 
            "roomviewCheckInOut" => "Check-In / Check-Out:"
        )
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $roomviewLang = 'de-de';
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $roomviewLang = 'da-dk';
    }
  }
?>

<section id="roompage_section">
  <div class="container">
    <div class="col-md-14">
      <div class="roompage_title_div">
        <div class="row">
          <div class="col-md-1 roompage_back"><a href="./ourrooms?lang=<?php echo $roomviewLang; ?>"><img id="roompage_back_icon" src="img/left-arrow.png" width="25px"></a></div>
          <div class="col-md-5 roompage_roomname">
            <?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewRoomName', 'Not Defined'); ?>
          </div>
        </div>
      </div>
      <div class="roompage_room_div">
        <div class="row">
          <div class="col-md-8">
            <div class="single-item roomview_carousel">
              <div class="roomitem_carousel sel_elem">
                <img src="<?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewImg1Path', ''); ?>">
              </div>
              <div class="roomitem_carousel sel_elem">
                <img src="<?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewImg2Path', ''); ?>">
              </div>
              <div class="roomitem_carousel sel_elem">
                <img src="<?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewImg3Path', ''); ?>">
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="roompage_room_fare">
              <div class="roompage_room_fare_panel">
                <div class="roompage_room_fare_from">
                    <?php echo printValueGivenKey2D($roomviewText, 'generic', 'roomviewRoomPriceFrom', 'From'); ?>
                </div>
                <div class="roompage_room_fare_price">
                    <?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewRoomPrice', 'CHF -'); ?> <img class="room_fare_question_mark" src="img/question_icon.png" width="15px">
                </div>
                <div class="roompage_room_fare_pernight">
                    <?php echo printValueGivenKey2D($roomviewText, 'generic', 'roomviewPerNight', 'Per Night'); ?>
                </div>
              </div>
              <a href="./bookinfo?roomname=<?php echo $roomName; ?>&lang=<?php echo $roomviewLang; ?>" type="button" class="btn roompage_moreinfo_button">
                <?php echo printValueGivenKey2D($roomviewText, 'generic', 'roomviewBookInfo', 'Book Info'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="roompage_room_spotinfo_div">
        <div class="roompage_room_spotinfo_elem">
          <div class="row">
            <div class="col-md-2 roompage_room_spotinfo_title boldLetters">
                <?php echo printValueGivenKey2D($roomviewText, 'generic', 'roomviewProperties', 'Properties:'); ?>
            </div>
            <div class="col-md-3 roompage_room_spotinfo_item">
                <?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewAccomodates', 'Accomodates: -'); ?>
            </div>
            <div class="col-md-3 roompage_room_spotinfo_item">
                <?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewBeds', 'Beds: -'); ?>
            </div>
          </div>
        </div>
        <div class="roompage_room_spotinfo_elem">
          <div class="row">
            <div class="col-md-2 roompage_room_spotinfo_title boldLetters">
                <?php echo printValueGivenKey2D($roomviewText, 'generic', 'roomviewAmenities', 'Amenities:'); ?>
            </div>
            <div class="col-md-3 roompage_room_spotinfo_item"><img src="img/wifi_icon.png" width="25px" style="margin-right:5px">Wifi</div>
          </div>
        </div>
        <div class="roompage_room_spotinfo_elem">
          <div class="row">
            <div class="col-md-2 roompage_room_spotinfo_title boldLetters">
                <?php echo printValueGivenKey2D($roomviewText, 'generic', 'roomviewCheckInOut', 'Check In and Out:'); ?>
            </div>
            <div class="col-md-3 roompage_room_spotinfo_item">
                <?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewCheckIn', 'Check-In: -'); ?>
            </div>
            <div class="col-md-3 roompage_room_spotinfo_item">
                <?php echo printValueGivenKey2D($roomviewText, $roomName, 'roomviewCheckOut', 'Check-Out: -'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
