
<?php include("./helper.php"); ?>

<?php
  $bookInfoText = array(
    "bookInfoPageTitle" => "Booking - B&amp;B Panorama Lauenen",
    "bookInfoTitle" => "Book Info", 
    "bookInfoIntro" => "If you would like to book a room you may follow one of the options below:", 
    "bookInfoOption1" => "Contact us directly using the contact information below. We would be glad to take your order!", 
    "bookInfoOption2" => "Book through Booking.com", 
    "bookInfoOption3" => "Book through Tripadvisor.com", 
    "bookInfoOption4" => "Find us on Google", 
    "bookInfoHere" => "here", 
    "bookInfoLookingForward" => "We are looking forward to welcoming you!"
  );

  $bookInfoLang = 'en-us';

  if(isset($_GET['lang']))
  {
    if(strtolower($_GET['lang']) == 'fr-fr')
    {
      $bookInfoLang = 'fr-fr';
      $bookInfoText = array(
        "bookInfoPageTitle" => "Réservation - B&amp;B Panorama Lauenen",
        "bookInfoTitle" => "Réservation", 
        "bookInfoIntro" => "Pour réserver une chambre, veuillez suivre une des options ci-dessous:", 
        "bookInfoOption1" => "Contactez nous directement en utilisant les informations de contact ci-dessous. Nous serons ravis de prendre votre réservation!", 
        "bookInfoOption2" => "Réservez sur Booking.com", 
        "bookInfoOption3" => "Réservez sur Tripadvisor.com", 
        "bookInfoOption4" => "Trouvez nous sur Google", 
        "bookInfoHere" => "ici", 
        "bookInfoLookingForward" => "Nous nous réjouissons de vous accueillir!"
      );
    }
    if(strtolower($_GET['lang']) == 'de-de')
    {
      $bookInfoLang = 'de-de';
    }
    if(strtolower($_GET['lang']) == 'da-dk')
    {
      $bookInfoLang = 'da-dk';
    }
  }
?>

<html>
  <head>
    <title>
      <?php echo printValueGivenKey($bookInfoText, 'bookInfoPageTitle', 'Booking - B&amp;B Panorama Lauenen'); ?>
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
    <link href="css/bookinfo.css" rel="stylesheet">
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

    <section id="bookinfo_section">
      <div class="container">
        <div class="col-md-14">
          <div class="bookinfo_title_div">
            <div class="row">
              <div class="col-md-1 bookinfo_back"><a href="./room?roomname=<?php echo($_GET["roomname"]); ?>&lang=<?php echo $bookInfoLang; ?>"><img id="bookinfo_back_icon" src="img/left-arrow.png" width="25px"></a></div>
              <div class="col-md-5 bookinfo_title">
                <?php echo printValueGivenKey($bookInfoText, 'bookInfoTitle', 'Book Info'); ?>
              </div>
            </div>
          </div>
          <div class="bookinfo_div">
            <?php echo printValueGivenKey($bookInfoText, 'bookInfoIntro', 'If you would like to book a room you may follow one of the options below:'); ?>
            <br><br>
            <ul>
              <li>
                <?php echo printValueGivenKey($bookInfoText, 'bookInfoOption1', 'Contact us directly using the contact information below. We would be glad to take your order!'); ?>
              </li>
              <li>
                <?php echo printValueGivenKey($bookInfoText, 'bookInfoOption2', 'Book through Booking.com'); ?>&nbsp;<a target="_blank" href="http://www.booking.com/Share-UJPgf1"><?php echo printValueGivenKey($bookInfoText, 'bookInfoHere', 'here'); ?></a>
              </li>
              <li>
                <?php echo printValueGivenKey($bookInfoText, 'bookInfoOption3', 'Book through Tripadvisor.com'); ?>&nbsp;<a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g1157721-d3806523-Reviews-Pension_Panorama_B_B-Lauenen_Bernese_Oberland_Canton_of_Bern.html"><?php echo printValueGivenKey($bookInfoText, 'bookInfoHere', 'here'); ?></a>
              </li>
              <li>
                <?php echo printValueGivenKey($bookInfoText, 'bookInfoOption4', 'Find us on Google'); ?>&nbsp;<a target="_blank" href="https://goo.gl/maps/iLBDQ6hqFH92"><?php echo printValueGivenKey($bookInfoText, 'bookInfoHere', 'here'); ?></a>
              </li>
            </ul>
            <br>
            <?php echo printValueGivenKey($bookInfoText, 'bookInfoLookingForward', 'We are looking forward to welcoming you!'); ?>
          </div>
        </div>
      </div>
    </section>


    
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
