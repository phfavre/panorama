
<?php include("./helper.php"); ?>

<?php
  $ourRoomText = array(
    "ourRoomPageTitle" => "Rooms - B&amp;B Panorama Lauenen",
    "ourRoomTitle" => "Our Rooms", 
    "ourRoomRoom1Info" => "Room with balcony", 
    "ourRoomRoom1Bed" => "Beds: 2 single beds", 
    "ourRoomRoom1Occupancy" => "Max: 2 guests", 
    "ourRoomRoom2Info" => "Room with balcony", 
    "ourRoomRoom2Bed" => "Beds: 2 single beds", 
    "ourRoomRoom2Occupancy" => "Max: 2 guests", 
    "ourRoomRoom3Info" => "Nice room without balcony", 
    "ourRoomRoom3Bed" => "Beds: 2 single beds", 
    "ourRoomRoom3Occupancy" => "Max: 2 guests", 
    "ourRoomRoom4Info" => "Nice room without balcony", 
    "ourRoomRoom4Bed" => "Beds: 2 single beds", 
    "ourRoomRoom4Occupancy" => "Max: 2 guests", 
    "ourRoomRoom5Info" => "Nice room without balcony", 
    "ourRoomRoom5Bed" => "Beds: 2 single beds", 
    "ourRoomRoom5Occupancy" => "Max: 2 guests", 
    "ourRoomRoom6Info" => "Nice room without balcony", 
    "ourRoomRoom6Bed" => "Beds: 2 single beds", 
    "ourRoomRoom6Occupancy" => "Max: 2 guests", 
    "ourRoomRoom7Info" => "Nice room without balcony", 
    "ourRoomRoom7Bed" => "Beds: 2 single beds", 
    "ourRoomRoom7Occupancy" => "Max: 2 guests", 
    "ourRoomPriceFrom" => "From", 
    "ourRoomMoreInfo" => "More Info"
  );

  $ourRoomLang = 'en-us';

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $ourRoomLang = 'fr-fr';
      $ourRoomText = array(
        "ourRoomPageTitle" => "Chambres - B&amp;B Panorama Lauenen",
        "ourRoomTitle" => "Nos Chambres", 
        "ourRoomRoom1Info" => "Chambre avec balcon", 
        "ourRoomRoom1Bed" => "Lits: 2 lits simples", 
        "ourRoomRoom1Occupancy" => "Max: 2 occupants", 
        "ourRoomRoom2Info" => "Chambre avec balcon", 
        "ourRoomRoom2Bed" => "Lits: 2 lits simples", 
        "ourRoomRoom2Occupancy" => "Max: 2 occupants", 
        "ourRoomRoom3Info" => "Jolie chambre sans balcon", 
        "ourRoomRoom3Bed" => "Lits: 2 lits simples", 
        "ourRoomRoom3Occupancy" => "Max: 2 occupants", 
        "ourRoomRoom4Info" => "Jolie chambre sans balcon", 
        "ourRoomRoom4Bed" => "Lits: 2 lits simples", 
        "ourRoomRoom4Occupancy" => "Max: 2 occupants", 
        "ourRoomRoom5Info" => "Jolie chambre sans balcon", 
        "ourRoomRoom5Bed" => "Lits: 2 lits simples", 
        "ourRoomRoom5Occupancy" => "Max: 2 occupants", 
        "ourRoomRoom6Info" => "Jolie chambre sans balcon", 
        "ourRoomRoom6Bed" => "Lits: 2 lits simples", 
        "ourRoomRoom6Occupancy" => "Max: 2 occupants", 
        "ourRoomRoom7Info" => "Jolie chambre sans balcon", 
        "ourRoomRoom7Bed" => "Lits: 2 lits simples", 
        "ourRoomRoom7Occupancy" => "Max: 2 occupants", 
        "ourRoomPriceFrom" => "À partir de", 
        "ourRoomMoreInfo" => "Plus d'info"
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $ourRoomLang = 'de-de';
      $ourRoomText = array(
        "ourRoomPageTitle" => "Zimmer - B&amp;B Panorama Lauenen",
        "ourRoomTitle" => "Unsere Zimmer", 
        "ourRoomRoom1Info" => "Zimmer mit Balkon", 
        "ourRoomRoom1Bed" => "Betten: 2 Einzelbetten", 
        "ourRoomRoom1Occupancy" => "Max: 2 Personen", 
        "ourRoomRoom2Info" => "Zimmer mit Balkon", 
        "ourRoomRoom2Bed" => "Betten: 2 Einzelbetten", 
        "ourRoomRoom2Occupancy" => "Max: 2 Personen", 
        "ourRoomRoom3Info" => "Schönes Zimmer ohne Balkon", 
        "ourRoomRoom3Bed" => "Betten: 2 Einzelbetten", 
        "ourRoomRoom3Occupancy" => "Max: 2 Personen", 
        "ourRoomRoom4Info" => "Schönes Zimmer ohne Balkon", 
        "ourRoomRoom4Bed" => "Betten: 2 Einzelbetten", 
        "ourRoomRoom4Occupancy" => "Max: 2 Personen", 
        "ourRoomRoom5Info" => "Schönes Zimmer ohne Balkon", 
        "ourRoomRoom5Bed" => "Betten: 2 Einzelbetten", 
        "ourRoomRoom5Occupancy" => "Max: 2 Personen", 
        "ourRoomRoom6Info" => "Schönes Zimmer ohne Balkon", 
        "ourRoomRoom6Bed" => "Betten: 2 Einzelbetten", 
        "ourRoomRoom6Occupancy" => "Max: 2 Personen", 
        "ourRoomRoom7Info" => "Schönes Zimmer ohne Balkon", 
        "ourRoomRoom7Bed" => "Betten: 2 Einzelbetten", 
        "ourRoomRoom7Occupancy" => "Max: 2 Personen", 
        "ourRoomPriceFrom" => "Von", 
        "ourRoomMoreInfo" => "Mehr Info"
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $ourRoomLang = 'da-dk';
    }
  }
?>

<html>
  <head>
    <title>
      <?php echo printValueGivenKey($ourRoomText, 'ourRoomPageTitle', 'Rooms - B&amp;B Panorama Lauenen'); ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link href="ext/bootstrap/bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="ext/bootflat/2.0.4/bootflat.github.io-master/bootflat/css/bootflat.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/ourrooms.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
    queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://
    -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

  </head>
  <body>
    <?php include("view/navbar.php"); ?>
	
	<section id="ourrooms_section">
      <div class="container">
        <div class="col-md-14">
          <div id="ourrooms_title_div">
            <div id="ourrooms_title">
              <?php echo printValueGivenKey($ourRoomText, 'ourRoomTitle', 'Our Rooms'); ?>
            </div>
          </div>
          <div class="ourrooms_room_div">
            <div class="row">
              <div class="col-md-3">
                <div class="ourrooms_room_img"><a href="./room?roomname=spitzhorn&lang=<?php echo $ourRoomLang; ?>"><img src="img/spitzhorn_01.jpg" width="100%"></a></div>
              </div>
              <div class="col-md-6">
                <div class="ourrooms_room_info">
                  <div class="ourrooms_room_name boldLetters">Spitzhorn</div>
                  <div class="ourrooms_room_description">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom1Info', 'Room with balcony'); ?>
                    <br><br>
                    <ul>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom1Bed', 'Beds: 2 single beds'); ?>
                      </li>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom1Occupancy', 'Max: 2 guests'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="ourrooms_room_items"><img src="img/wifi_icon.png" width="25px"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ourrooms_room_price">
                  <div class="ourrooms_room_price_from">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomPriceFrom', 'From'); ?>
                  </div>
                  <div class="ourrooms_room_price_fare">CHF 55</div>
                  <div class="ourrooms_room_price_more">
                    <a href="./room?roomname=spitzhorn&lang=<?php echo $ourRoomLang; ?>" type="button" class="btn room_more_info_button">
                      <?php echo printValueGivenKey($ourRoomText, 'ourRoomMoreInfo', 'More Info'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ourrooms_room_div">
            <div class="row">
              <div class="col-md-3">
                <div class="ourrooms_room_img"><a href="./room?roomname=wildhorn&lang=<?php echo $ourRoomLang; ?>"><img src="img/wildhorn_01.jpg" width="100%"></a></div>
              </div>
              <div class="col-md-6">
                <div class="ourrooms_room_info">
                  <div class="ourrooms_room_name boldLetters">Wildhorn</div>
                  <div class="ourrooms_room_description">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom2Info', 'Room with balcony'); ?>
                    <br><br>
                    <ul>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom2Bed', 'Beds: 2 single beds'); ?>
                      </li>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom2Occupancy', 'Max: 2 guests'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="ourrooms_room_items"><img src="img/wifi_icon.png" width="25px"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ourrooms_room_price">
                  <div class="ourrooms_room_price_from">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomPriceFrom', 'From'); ?>
                  </div>
                  <div class="ourrooms_room_price_fare">CHF 55</div>
                  <div class="ourrooms_room_price_more">
                    <a href="./room?roomname=wildhorn&lang=<?php echo $ourRoomLang; ?>" type="button" class="btn room_more_info_button">
                      <?php echo printValueGivenKey($ourRoomText, 'ourRoomMoreInfo', 'More Info'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ourrooms_room_div">
            <div class="row">
              <div class="col-md-3">
                <div class="ourrooms_room_img"><a href="./room?roomname=geltenhorn&lang=<?php echo $ourRoomLang; ?>"><img src="img/geltenhorn_01.jpg" width="100%"></a></div>
              </div>
              <div class="col-md-6">
                <div class="ourrooms_room_info">
                  <div class="ourrooms_room_name boldLetters">Geltenhorn</div>
                  <div class="ourrooms_room_description">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom3Info', 'Nice room without balcony'); ?>
                    <br><br>
                    <ul>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom3Bed', 'Beds: 2 single beds'); ?>
                      </li>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom3Occupancy', 'Max: 2 guests'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="ourrooms_room_items"><img src="img/wifi_icon.png" width="25px"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ourrooms_room_price">
                  <div class="ourrooms_room_price_from">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomPriceFrom', 'From'); ?>
                  </div>
                  <div class="ourrooms_room_price_fare">CHF 55</div>
                  <div class="ourrooms_room_price_more">
                    <a href="./room?roomname=geltenhorn&lang=<?php echo $ourRoomLang; ?>" type="button" class="btn room_more_info_button">
                      <?php echo printValueGivenKey($ourRoomText, 'ourRoomMoreInfo', 'More Info'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ourrooms_room_div">
            <div class="row">
              <div class="col-md-3">
                <div class="ourrooms_room_img"><a href="./room?roomname=niesenhorn&lang=<?php echo $ourRoomLang; ?>"><img src="img/niesenhorn_01.jpg" width="100%"></a></div>
              </div>
              <div class="col-md-6">
                <div class="ourrooms_room_info">
                  <div class="ourrooms_room_name boldLetters">Niesenhorn</div>
                  <div class="ourrooms_room_description">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom4Info', 'Nice room without balcony'); ?>
                    <br><br>
                    <ul>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom4Bed', 'Beds: 2 single beds'); ?>
                      </li>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom4Occupancy', 'Max: 2 guests'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="ourrooms_room_items"><img src="img/wifi_icon.png" width="25px"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ourrooms_room_price">
                  <div class="ourrooms_room_price_from">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomPriceFrom', 'From'); ?>
                  </div>
                  <div class="ourrooms_room_price_fare">CHF 55</div>
                  <div class="ourrooms_room_price_more">
                    <a href="./room?roomname=niesenhorn&lang=<?php echo $ourRoomLang; ?>" type="button" class="btn room_more_info_button">
                      <?php echo printValueGivenKey($ourRoomText, 'ourRoomMoreInfo', 'More Info'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ourrooms_room_div">
            <div class="row">
              <div class="col-md-3">
                <div class="ourrooms_room_img"><a href="./room?roomname=wasserngrat&lang=<?php echo $ourRoomLang; ?>"><img src="img/wasserngrat_01.jpg" width="100%"></a></div>
              </div>
              <div class="col-md-6">
                <div class="ourrooms_room_info">
                  <div class="ourrooms_room_name boldLetters">Wasserngrat</div>
                  <div class="ourrooms_room_description">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom5Info', 'Nice room without balcony'); ?>
                    <br><br>
                    <ul>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom5Bed', 'Beds: 2 single beds'); ?>
                      </li>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom5Occupancy', 'Max: 2 guests'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="ourrooms_room_items"><img src="img/wifi_icon.png" width="25px"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ourrooms_room_price">
                  <div class="ourrooms_room_price_from">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomPriceFrom', 'From'); ?>
                  </div>
                  <div class="ourrooms_room_price_fare">CHF 55</div>
                  <div class="ourrooms_room_price_more">
                    <a href="./room?roomname=wasserngrat&lang=<?php echo $ourRoomLang; ?>" type="button" class="btn room_more_info_button">
                      <?php echo printValueGivenKey($ourRoomText, 'ourRoomMoreInfo', 'More Info'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ourrooms_room_div">
            <div class="row">
              <div class="col-md-3">
                <div class="ourrooms_room_img"><a href="./room?roomname=gride&lang=<?php echo $ourRoomLang; ?>"><img src="img/gride_01.jpg" width="100%"></a></div>
              </div>
              <div class="col-md-6">
                <div class="ourrooms_room_info">
                  <div class="ourrooms_room_name boldLetters">Gride</div>
                  <div class="ourrooms_room_description">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom6Info', 'Nice room without balcony'); ?>
                    <br><br>
                    <ul>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom6Bed', 'Beds: 2 single beds'); ?>
                      </li>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom6Occupancy', 'Max: 2 guests'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="ourrooms_room_items"><img src="img/wifi_icon.png" width="25px"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ourrooms_room_price">
                  <div class="ourrooms_room_price_from">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomPriceFrom', 'From'); ?>
                  </div>
                  <div class="ourrooms_room_price_fare">CHF 55</div>
                  <div class="ourrooms_room_price_more">
                    <a href="./room?roomname=gride&lang=<?php echo $ourRoomLang; ?>" type="button" class="btn room_more_info_button">
                      <?php echo printValueGivenKey($ourRoomText, 'ourRoomMoreInfo', 'More Info'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ourrooms_room_div">
            <div class="row">
              <div class="col-md-3">
                <div class="ourrooms_room_img"><a href="./room?roomname=rothorn&lang=<?php echo $ourRoomLang; ?>"><img src="img/rothorn_01.jpg" width="100%"></a></div>
              </div>
              <div class="col-md-6">
                <div class="ourrooms_room_info">
                  <div class="ourrooms_room_name boldLetters">Rothorn</div>
                  <div class="ourrooms_room_description">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom7Info', 'Nice room without balcony'); ?>
                    <br><br>
                    <ul>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom7Bed', 'Beds: 2 single beds'); ?>
                      </li>
                      <li>
                        <?php echo printValueGivenKey($ourRoomText, 'ourRoomRoom6Occupancy', 'Max: 2 guests'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="ourrooms_room_items"><img src="img/wifi_icon.png" width="25px"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="ourrooms_room_price">
                  <div class="ourrooms_room_price_from">
                    <?php echo printValueGivenKey($ourRoomText, 'ourRoomPriceFrom', 'From'); ?>
                  </div>
                  <div class="ourrooms_room_price_fare">CHF 55</div>
                  <div class="ourrooms_room_price_more">
                    <a href="./room?roomname=rothorn&lang=<?php echo $ourRoomLang; ?>" type="button" class="btn room_more_info_button">
                      <?php echo printValueGivenKey($ourRoomText, 'ourRoomMoreInfo', 'More Info'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
	
    <?php include("view/contact.php"); ?>
    <?php include("view/footer.php"); ?>
    
    <script src="ext/jquery/1.11.1/jquery.min.js"></script>
    <script src="ext/bootstrap/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
    <script src="js/general.js"></script>
    <script src="js/navbar.js"></script>
  </body>
</html>
