
<?php include("./helper.php"); ?>

<?php
  $roomText = array(
    "roomPageTitle" => "Rooms - B&amp;B Panorama Lauenen",
    "roomRoomPrices" => "Room Prices", 
    "roomRoomFareExplanation" => "Room fare per person per night", 
    "roomHighSeasonWinter" => "High Season Winter", 
    "roomHighSeasonSummer" => "High Season Summer", 
    "roomLowSeasonSpring" => "Low Season Spring", 
    "roomLowSeasonAutumn" => "Low Season Autumn", 
    "roomDateFrom" => "From", 
    "roomBreakfastIncl" => "breakfast included", 
    "roomIfOnePerson" => "if 1 person", 
    "roomIfTwoPerson" => "if 2 persons", 
    "studioPrice" => "Studio Mutthorn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From 01.01 - 31.12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHF 110 (tax included)", 
    "roomAdditionalTax" => "Additional tax of CHF 2 per person will be added to the prices above.", 
    "roomCancelInfo" => "CONDITIONS<br>With your reservation you accept the following conditions. When canceling a reservation or booking, we charge the following cancellation fees:<br>From 10 days before the start of the holiday, 80% of the rental price.<br>Failure to arrive at the resort and early departure, 100% of the rental price.",
    "roomContactUs" => "Please contact us for group fare."
  );

  $roomLang = 'en-us';

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $roomLang = 'fr-fr';
      $roomText = array(
        "roomPageTitle" => "Chambres - B&amp;B Panorama Lauenen",
        "roomRoomPrices" => "Prix des chambres", 
        "roomRoomFareExplanation" => "Prix par personne et par nuit", 
        "roomHighSeasonWinter" => "Haute Saison Hiver", 
        "roomHighSeasonSummer" => "Haute Saison Été", 
        "roomLowSeasonSpring" => "Basse Saison Printemps", 
        "roomLowSeasonAutumn" => "Basse Saison Automne", 
        "roomDateFrom" => "Du", 
        "roomBreakfastIncl" => "petit déjeuner inclus", 
        "roomIfOnePerson" => "si 1 personne", 
        "roomIfTwoPerson" => "si 2 personnes", 
        "roomAdditionalTax" => "Une taxe supplémentaire de CHF 2 par personne sera ajoutée au prix ci-dessus.", 
        "studioPrice" => "Studio Mutthorn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Du 01.01 - 31.12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHF 110 (taxe inclue)", 
        "roomCancelInfo" => "CONDITIONS<br>Avec votre réservation, vous acceptez les conditions suivantes. Lors de l'annulation d'une réservation ou d'une réservation, nous facturons les frais d'annulation suivants:<br>A partir de 10 jours avant le début du séjour, 80% du prix de la location.<br>Défaut d'arrivée à la station et départ anticipé, 100% du prix de la location.",
        "roomContactUs" => "Veuillez nous contacter concernant les prix de groupe."
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $roomLang = 'de-de';
      $roomText = array(
        "roomPageTitle" => "Zimmer - B&amp;B Panorama Lauenen",
        "roomRoomPrices" => "Zimmerpreise", 
        "roomRoomFareExplanation" => "Preis pro Person pro Nacht", 
        "roomHighSeasonWinter" => "Hochsaison Winter", 
        "roomHighSeasonSummer" => "Hochsaison Sommer", 
        "roomLowSeasonSpring" => "Nebensaison Frühling", 
        "roomLowSeasonAutumn" => "Nebensaison Herbst", 
        "roomDateFrom" => "Von", 
        "roomBreakfastIncl" => "Frühstück inkludiert", 
        "roomIfOnePerson" => "für 1 Person", 
        "roomIfTwoPerson" => "für 2 Personen", 
        "roomAdditionalTax" => "Zu den oben genannten Preisen wird eine zusätzliche Steuer von CHF 2 pro Person erhoben.",
        "studioPrice" => "Studio Mutthorn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Von 01.01 - 31.12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHF 110 (inkl. Kurtaxe)",  
        "roomCancelInfo" => "AGB<br>Mit Ihrer Reservation akzeptieren Sie folgende Bestimmungen. Bei Annullierung einer Reservation oder einer Buchung verrechnen wir nachfolgende Annullierungsgebühren:<br>Ab 10 Tage vor Ferienbeginn 80% des Mietpreises.<br>Nichteintreffen am Ferienort sowie frühzeitiger Abreise. Nicht Anreisen 100% des Mietpreises.",
        "roomContactUs" => "Bitte kontaktieren Sie uns für Gruppenpreise."
      );
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $roomLang = 'da-dk';
      $roomText = array(
        "roomPageTitle" => "Værelse - B&amp;B Panorama Lauenen",
        "roomRoomPrices" => "Værelsespriser", 
        "roomRoomFareExplanation" => "Pris per person per nat", 
        "roomHighSeasonWinter" => "Højsæson Vinter", 
        "roomHighSeasonSummer" => "Højsæson Sommer", 
        "roomLowSeasonSpring" => "Lavsæson Forår", 
        "roomLowSeasonAutumn" => "Lavsæson Efterår", 
        "roomDateFrom" => "Fra", 
        "roomBreakfastIncl" => "morgenmad inkluderet", 
        "roomIfOnePerson" => "til 1 person", 
        "roomIfTwoPerson" => "til 2 personer", 
        "roomAdditionalTax" => "Ekstra skat på 2 CHF pr. Person tilføjes ovenstående priser.", 
        "studioPrice" => "Studio Mutthorn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fra 01.01 - 31.12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHF 110 (moms inkluderet)",  
        "roomCancelInfo" => "BETINGELSER<br>Med din reservation accepterer du følgende betingelser. Ved annullering af en reservation eller reservation opkræver vi følgende afbestillingsgebyrer:<br>Fra 10 dage før feriens start 80% af lejeprisen.<br>Manglende ankomst til resortet og tidlig afgang, 100% af lejeprisen.",
        "roomContactUs" => "Kontakt os venligst for gruppepris."
      );
    }
  }
?>

<html>
  <head>
    <title>
      <?php echo printValueGivenKey($roomText, 'roomPageTitle', 'Rooms - B&amp;B Panorama Lauenen'); ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link href="ext/bootstrap/bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="ext/bootflat/2.0.4/bootflat.github.io-master/bootflat/css/bootflat.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ext/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="ext/slick/slick-theme.css"/>
    <link href="css/general.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/roompage.css" rel="stylesheet">
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
    <?php
      if(isset($_GET["roomname"]))
      {
        $roomName = strtolower($_GET["roomname"]);
        $roomNameSet = array(
          "spitzhorn", "wildhorn", "geltenhorn", 
          "niesenhorn", "wasserngrat", "gride", "rothorn", "mutthorn"
        );
        if(in_array($roomName, $roomNameSet))
        {
          include("view/roomview.php");
        }
        else
        {
          echo("Room not defined");
        }
      }
      else
      {
        echo("Room not defined");
      }
    ?>
	
	<div class="modal fade" id="book_info_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">
              <?php echo printValueGivenKey($roomText, 'roomRoomPrices', 'Room Prices'); ?>
            </h4>
          </div>
          <div class="modal-body">
            <p>
              <?php echo printValueGivenKey($roomText, 'roomRoomFareExplanation', 'Room fare per person per night'); ?>
            </p>
            <table style="width:100%; font-size: 13px;">
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomHighSeasonWinter', 'High Season Winter'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 20/12 - 31/03
                </td>
                <td>CHF 95</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfOnePerson', 'if 1 person'); ?>
                </td>
              </tr>
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomHighSeasonWinter', 'High Season Winter'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 20/12 - 31/03
                </td> 
                <td>CHF 129</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfTwoPerson', 'if 2 persons'); ?>
                </td>
              </tr>
              <tr style="height:10px;"></tr>
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomHighSeasonSummer', 'High Season Summer'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 15/06 - 30/09
                </td> 
                <td>CHF 95</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfOnePerson', 'if 1 person'); ?>
                </td>
              </tr>
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomHighSeasonSummer', 'High Season Summer'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 15/06 - 30/09
                </td> 
                <td>CHF 129</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfTwoPerson', 'if 2 persons'); ?>
                </td>
              </tr>
              <tr style="height:10px;"></tr>
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomLowSeasonSpring', 'Low Season Spring'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 01/04 - 14/06
                </td> 
                <td>CHF 85</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfOnePerson', 'if 1 person'); ?>
                </td>
              </tr>
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomLowSeasonSpring', 'Low Season Spring'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 01/04 - 14/06
                </td> 
                <td>CHF 114</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfTwoPerson', 'if 2 persons'); ?>
                </td>
              </tr>
              <tr style="height:10px;"></tr>
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomLowSeasonAutumn', 'Low Season Autumn'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 01/10 - 19/12
                </td> 
                <td>CHF 85</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfOnePerson', 'if 1 person'); ?>
                </td>
              </tr>
              <tr>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomLowSeasonAutumn', 'Low Season Autumn'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomDateFrom', 'From'); ?> 01/10 - 19/12
                </td> 
                <td>CHF 114</td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomBreakfastIncl', 'breakfast included'); ?>
                </td>
                <td>
                  <?php echo printValueGivenKey($roomText, 'roomIfTwoPerson', 'if 2 persons'); ?>
                </td>
              </tr>
            </table>
            <br>
            <p>
              <?php echo printValueGivenKey($roomText, 'roomAdditionalTax', 'Additional tax of CHF 2 per person will be added to the prices above.'); ?>
              <br><br>
              <?php echo printValueGivenKey($roomText, 'studioPrice', 'Studio Mutthorn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From 01.01 - 31.12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHF 110 (tax included)'); ?>
              <br><br>
              <?php echo printValueGivenKey($roomText, 'roomCancelInfo', 'Please contact us for group fare.'); ?>
              <br><br>
              <?php echo printValueGivenKey($roomText, 'roomContactUs', 'Please contact us for group fare.'); ?>
            </p>
          </div>
          <div class="modal-footer">
            <div class="col-md-12">
              <button type="button" class="btn-modal btn-block btn-ok" data-dismiss="modal">Ok</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include("view/contact.php"); ?>
    <?php include("view/footer.php"); ?>
    
    <script src="ext/jquery/1.11.1/jquery.min.js"></script>
    <script src="ext/bootstrap/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ext/slick/slick.js"></script>
    <script src="js/general.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/roompage.js"></script>
  </body>
</html>
