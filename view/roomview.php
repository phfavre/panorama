
<?php
  $roomviewText = array(
    "spitzhorn" => array(
        "roomviewRoomName" => "Spitzhorn", 
        "roomviewImg1Path" => "img/spitzhorn_01.jpg", 
        "roomviewImg2Path" => "img/spitzhorn_02.jpg", 
        "roomviewImg3Path" => "img/spitzhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 85", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 3:30PM", 
        "roomviewCheckOut" => "Check-Out: 10:30AM"
    ), 
    "wildhorn" => array(
        "roomviewRoomName" => "Wildhorn", 
        "roomviewImg1Path" => "img/wildhorn_01.jpg", 
        "roomviewImg2Path" => "img/wildhorn_02.jpg", 
        "roomviewImg3Path" => "img/wildhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 85", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 3:30PM", 
        "roomviewCheckOut" => "Check-Out: 10:30AM"
    ), 
    "geltenhorn" => array(
        "roomviewRoomName" => "Geltenhorn", 
        "roomviewImg1Path" => "img/geltenhorn_01.jpg", 
        "roomviewImg2Path" => "img/geltenhorn_02.jpg", 
        "roomviewImg3Path" => "img/geltenhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 85", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 3:30PM", 
        "roomviewCheckOut" => "Check-Out: 10:30AM"
    ), 
    "niesenhorn" => array(
        "roomviewRoomName" => "Niesenhorn", 
        "roomviewImg1Path" => "img/niesenhorn_01.jpg", 
        "roomviewImg2Path" => "img/niesenhorn_02.jpg", 
        "roomviewImg3Path" => "img/niesenhorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 85", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 3:30PM", 
        "roomviewCheckOut" => "Check-Out: 10:30AM"
    ), 
    "wasserngrat" => array(
        "roomviewRoomName" => "Wasserngrat", 
        "roomviewImg1Path" => "img/wasserngrat_01.jpg", 
        "roomviewImg2Path" => "img/wasserngrat_02.jpg", 
        "roomviewImg3Path" => "img/wasserngrat_03.jpg", 
        "roomviewRoomPrice" => "CHF 85", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 3:30PM", 
        "roomviewCheckOut" => "Check-Out: 10:30AM"
    ), 
    "gride" => array(
        "roomviewRoomName" => "Gride", 
        "roomviewImg1Path" => "img/gride_01.jpg", 
        "roomviewImg2Path" => "img/gride_02.jpg", 
        "roomviewImg3Path" => "img/gride_03.jpg", 
        "roomviewRoomPrice" => "CHF 85", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 3:30PM", 
        "roomviewCheckOut" => "Check-Out: 10:30AM"
    ), 
    "rothorn" => array(
        "roomviewRoomName" => "Rothorn", 
        "roomviewImg1Path" => "img/rothorn_01.jpg", 
        "roomviewImg2Path" => "img/rothorn_02.jpg", 
        "roomviewImg3Path" => "img/rothorn_03.jpg", 
        "roomviewRoomPrice" => "CHF 85", 
        "roomviewAccomodates" => "Accomodates: 2", 
        "roomviewBeds" => "Beds: 2 Singles", 
        "roomviewCheckIn" => "Check-In: 3:30PM", 
        "roomviewCheckOut" => "Check-Out: 10:30AM"
    ), 
    "mutthorn" => array(
      "roomviewRoomName" => "Studio Mutthorn", 
      "roomviewImg1Path" => "img/mutthorn_01.jpg", 
      "roomviewImg2Path" => "img/mutthorn_02.jpg", 
      "roomviewImg3Path" => "img/mutthorn_03.jpg", 
      "roomviewRoomPrice" => "CHF 110", 
      "roomviewAccomodates" => "Accomodates: 2", 
      "roomviewBeds" => "Beds: 2 Singles", 
      "roomviewCheckIn" => "Check-In: 3:30PM", 
      "roomviewCheckOut" => "Check-Out: 10:30AM"
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
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 15:30 heures", 
            "roomviewCheckOut" => "Check-Out: 10:30 heures"
        ), 
        "wildhorn" => array(
            "roomviewRoomName" => "Wildhorn", 
            "roomviewImg1Path" => "img/wildhorn_01.jpg", 
            "roomviewImg2Path" => "img/wildhorn_02.jpg", 
            "roomviewImg3Path" => "img/wildhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 15:30 heures", 
            "roomviewCheckOut" => "Check-Out: 10:30 heures"
        ), 
        "geltenhorn" => array(
            "roomviewRoomName" => "Geltenhorn", 
            "roomviewImg1Path" => "img/geltenhorn_01.jpg", 
            "roomviewImg2Path" => "img/geltenhorn_02.jpg", 
            "roomviewImg3Path" => "img/geltenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 15:30 heures", 
            "roomviewCheckOut" => "Check-Out: 10:30 heures"
        ), 
        "niesenhorn" => array(
            "roomviewRoomName" => "Niesenhorn", 
            "roomviewImg1Path" => "img/niesenhorn_01.jpg", 
            "roomviewImg2Path" => "img/niesenhorn_02.jpg", 
            "roomviewImg3Path" => "img/niesenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 15:30 heures", 
            "roomviewCheckOut" => "Check-Out: 10:30 heures"
        ), 
        "wasserngrat" => array(
            "roomviewRoomName" => "Wasserngrat", 
            "roomviewImg1Path" => "img/wasserngrat_01.jpg", 
            "roomviewImg2Path" => "img/wasserngrat_02.jpg", 
            "roomviewImg3Path" => "img/wasserngrat_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 15:30 heures", 
            "roomviewCheckOut" => "Check-Out: 10:30 heures"
        ), 
        "gride" => array(
            "roomviewRoomName" => "Gride", 
            "roomviewImg1Path" => "img/gride_01.jpg", 
            "roomviewImg2Path" => "img/gride_02.jpg", 
            "roomviewImg3Path" => "img/gride_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 15:30 heures", 
            "roomviewCheckOut" => "Check-Out: 10:30 heures"
        ), 
        "rothorn" => array(
            "roomviewRoomName" => "Rothorn", 
            "roomviewImg1Path" => "img/rothorn_01.jpg", 
            "roomviewImg2Path" => "img/rothorn_02.jpg", 
            "roomviewImg3Path" => "img/rothorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Capacité: 2 personnes", 
            "roomviewBeds" => "Lits: 2 lits simples", 
            "roomviewCheckIn" => "Check-In: 15:30 heures", 
            "roomviewCheckOut" => "Check-Out: 10:30 heures"
        ), 
        "mutthorn" => array(
          "roomviewRoomName" => "Studio Mutthorn", 
          "roomviewImg1Path" => "img/mutthorn_01.jpg", 
          "roomviewImg2Path" => "img/mutthorn_02.jpg", 
          "roomviewImg3Path" => "img/mutthorn_03.jpg", 
          "roomviewRoomPrice" => "CHF 110", 
          "roomviewAccomodates" => "Capacité: 2 personnes", 
          "roomviewBeds" => "Lits: 2 lits simples", 
          "roomviewCheckIn" => "Check-In: 15:30 heures", 
          "roomviewCheckOut" => "Check-Out: 10:30 heures"
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
      $roomviewText = array(
        "spitzhorn" => array(
            "roomviewRoomName" => "Spitzhorn", 
            "roomviewImg1Path" => "img/spitzhorn_01.jpg", 
            "roomviewImg2Path" => "img/spitzhorn_02.jpg", 
            "roomviewImg3Path" => "img/spitzhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Platz für: 2 Personen", 
            "roomviewBeds" => "Betten: 2 Einzelbetten", 
            "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
            "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
        ), 
        "wildhorn" => array(
            "roomviewRoomName" => "Wildhorn", 
            "roomviewImg1Path" => "img/wildhorn_01.jpg", 
            "roomviewImg2Path" => "img/wildhorn_02.jpg", 
            "roomviewImg3Path" => "img/wildhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Platz für: 2 Personen", 
            "roomviewBeds" => "Betten: 2 Einzelbetten", 
            "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
            "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
        ), 
        "geltenhorn" => array(
            "roomviewRoomName" => "Geltenhorn", 
            "roomviewImg1Path" => "img/geltenhorn_01.jpg", 
            "roomviewImg2Path" => "img/geltenhorn_02.jpg", 
            "roomviewImg3Path" => "img/geltenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Platz für: 2 Personen", 
            "roomviewBeds" => "Betten: 2 Einzelbetten", 
            "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
            "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
        ), 
        "niesenhorn" => array(
            "roomviewRoomName" => "Niesenhorn", 
            "roomviewImg1Path" => "img/niesenhorn_01.jpg", 
            "roomviewImg2Path" => "img/niesenhorn_02.jpg", 
            "roomviewImg3Path" => "img/niesenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Platz für: 2 Personen", 
            "roomviewBeds" => "Betten: 2 Einzelbetten", 
            "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
            "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
        ), 
        "wasserngrat" => array(
            "roomviewRoomName" => "Wasserngrat", 
            "roomviewImg1Path" => "img/wasserngrat_01.jpg", 
            "roomviewImg2Path" => "img/wasserngrat_02.jpg", 
            "roomviewImg3Path" => "img/wasserngrat_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Platz für: 2 Personen", 
            "roomviewBeds" => "Betten: 2 Einzelbetten", 
            "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
            "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
        ), 
        "gride" => array(
            "roomviewRoomName" => "Gride", 
            "roomviewImg1Path" => "img/gride_01.jpg", 
            "roomviewImg2Path" => "img/gride_02.jpg", 
            "roomviewImg3Path" => "img/gride_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Platz für: 2 Personen", 
            "roomviewBeds" => "Betten: 2 Einzelbetten", 
            "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
            "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
        ), 
        "rothorn" => array(
            "roomviewRoomName" => "Rothorn", 
            "roomviewImg1Path" => "img/rothorn_01.jpg", 
            "roomviewImg2Path" => "img/rothorn_02.jpg", 
            "roomviewImg3Path" => "img/rothorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Platz für: 2 Personen", 
            "roomviewBeds" => "Betten: 2 Einzelbetten", 
            "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
            "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
        ), 
        "mutthorn" => array(
          "roomviewRoomName" => "Studio Mutthorn", 
          "roomviewImg1Path" => "img/mutthorn_01.jpg", 
          "roomviewImg2Path" => "img/mutthorn_02.jpg", 
          "roomviewImg3Path" => "img/mutthorn_03.jpg", 
          "roomviewRoomPrice" => "CHF 110", 
          "roomviewAccomodates" => "Platz für: 2 Personen", 
          "roomviewBeds" => "Betten: 2 Einzelbetten", 
          "roomviewCheckIn" => "Check-In: 15:30 Uhr", 
          "roomviewCheckOut" => "Check-Out: 10:30 Uhr"
      ), 
        "generic" => array(
            "roomviewRoomPriceFrom" => "Von", 
            "roomviewPerNight" => "Pro Nacht", 
            "roomviewBookInfo" => "Mehr Informationen", 
            "roomviewProperties" => "Eigentum:", 
            "roomviewAmenities" => "Ausrüstung:", 
            "roomviewCheckInOut" => "Check-In / Check-Out:"
        )
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $roomviewLang = 'da-dk';
      $roomviewText = array(
        "spitzhorn" => array(
            "roomviewRoomName" => "Spitzhorn", 
            "roomviewImg1Path" => "img/spitzhorn_01.jpg", 
            "roomviewImg2Path" => "img/spitzhorn_02.jpg", 
            "roomviewImg3Path" => "img/spitzhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Plads til: 2 personer", 
            "roomviewBeds" => "Senge: 2 enkeltsenge", 
            "roomviewCheckIn" => "Check-In: 15:30", 
            "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "wildhorn" => array(
            "roomviewRoomName" => "Wildhorn", 
            "roomviewImg1Path" => "img/wildhorn_01.jpg", 
            "roomviewImg2Path" => "img/wildhorn_02.jpg", 
            "roomviewImg3Path" => "img/wildhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Plads til: 2 personer", 
            "roomviewBeds" => "Senge: 2 enkeltsenge", 
            "roomviewCheckIn" => "Check-In: 15:30", 
            "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "geltenhorn" => array(
            "roomviewRoomName" => "Geltenhorn", 
            "roomviewImg1Path" => "img/geltenhorn_01.jpg", 
            "roomviewImg2Path" => "img/geltenhorn_02.jpg", 
            "roomviewImg3Path" => "img/geltenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Plads til: 2 personer", 
            "roomviewBeds" => "Senge: 2 enkeltsenge", 
            "roomviewCheckIn" => "Check-In: 15:30", 
            "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "niesenhorn" => array(
            "roomviewRoomName" => "Niesenhorn", 
            "roomviewImg1Path" => "img/niesenhorn_01.jpg", 
            "roomviewImg2Path" => "img/niesenhorn_02.jpg", 
            "roomviewImg3Path" => "img/niesenhorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Plads til: 2 personer", 
            "roomviewBeds" => "Senge: 2 enkeltsenge", 
            "roomviewCheckIn" => "Check-In: 15:30", 
            "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "wasserngrat" => array(
            "roomviewRoomName" => "Wasserngrat", 
            "roomviewImg1Path" => "img/wasserngrat_01.jpg", 
            "roomviewImg2Path" => "img/wasserngrat_02.jpg", 
            "roomviewImg3Path" => "img/wasserngrat_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Plads til: 2 personer", 
            "roomviewBeds" => "Senge: 2 enkeltsenge", 
            "roomviewCheckIn" => "Check-In: 15:30", 
            "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "gride" => array(
            "roomviewRoomName" => "Gride", 
            "roomviewImg1Path" => "img/gride_01.jpg", 
            "roomviewImg2Path" => "img/gride_02.jpg", 
            "roomviewImg3Path" => "img/gride_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Plads til: 2 personer", 
            "roomviewBeds" => "Senge: 2 enkeltsenge", 
            "roomviewCheckIn" => "Check-In: 15:30", 
            "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "rothorn" => array(
            "roomviewRoomName" => "Rothorn", 
            "roomviewImg1Path" => "img/rothorn_01.jpg", 
            "roomviewImg2Path" => "img/rothorn_02.jpg", 
            "roomviewImg3Path" => "img/rothorn_03.jpg", 
            "roomviewRoomPrice" => "CHF 85", 
            "roomviewAccomodates" => "Plads til: 2 personer", 
            "roomviewBeds" => "Senge: 2 enkeltsenge", 
            "roomviewCheckIn" => "Check-In: 15:30", 
            "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "mutthorn" => array(
          "roomviewRoomName" => "Studio Mutthorn", 
          "roomviewImg1Path" => "img/mutthorn_01.jpg", 
          "roomviewImg2Path" => "img/mutthorn_02.jpg", 
          "roomviewImg3Path" => "img/mutthorn_03.jpg", 
          "roomviewRoomPrice" => "CHF 110", 
          "roomviewAccomodates" => "Plads til: 2 personer", 
          "roomviewBeds" => "Senge: 2 enkeltsenge", 
          "roomviewCheckIn" => "Check-In: 15:30", 
          "roomviewCheckOut" => "Check-Out: 10:30"
        ), 
        "generic" => array(
            "roomviewRoomPriceFrom" => "Fra", 
            "roomviewPerNight" => "Per Nat", 
            "roomviewBookInfo" => "Mere information", 
            "roomviewProperties" => "Ejendom:", 
            "roomviewAmenities" => "Faciliteter:", 
            "roomviewCheckInOut" => "Check-In / Check-Out:"
        )
      );
    }
  }
?>

<section id="roompage_section">
  <div class="container">
    <div class="col-md-12">
      <div class="roompage_title_div">
        <div class="row">
          <div class="col-xs-1 roompage_back"><a href="./ourrooms?lang=<?php echo $roomviewLang; ?>"><img id="roompage_back_icon" src="img/left-arrow.png" width="25px"></a></div>
          <div class="col-xs-5 roompage_roomname">
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
