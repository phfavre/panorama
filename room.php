<html>
  <head>
    <title>Rooms - B&amp;B Panorama Lauenen</title>
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
      if($_GET["roomname"] == "spitzhorn")
      {
        include("view/rooms/spitzhorn.php");
      }
      else if($_GET["roomname"] == "wildhorn")
      {
        include("view/rooms/wildhorn.php");
      }
      else if($_GET["roomname"] == "geltenhorn")
      {
        include("view/rooms/geltenhorn.php");
      }
      else if($_GET["roomname"] == "niesenhorn")
      {
        include("view/rooms/niesenhorn.php");
      }
      else if($_GET["roomname"] == "wasserngrat")
      {
        include("view/rooms/wasserngrat.php");
      }
      else if($_GET["roomname"] == "gride")
      {
        include("view/rooms/gride.php");
      }
      else if($_GET["roomname"] == "rothorn")
      {
        include("view/rooms/rothorn.php");
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
            <h4 class="modal-title" id="myModalLabel">Room Prices</h4>
          </div>
          <div class="modal-body">
            <p>Room fare per person per night</p>
            <table style="width:100%; font-size: 13px;">
              <tr>
                <td>High Season Winter</td>
                <td>From 20/12 - 31/03</td> 
                <td>CHF 85</td>
                <td>breakfast included</td>
                <td>if 1 person</td>
              </tr>
              <tr>
                <td>High Season Winter</td>
                <td>From 20/12 - 31/03</td> 
                <td>CHF 65</td>
                <td>breakfast included</td>
                <td>if 2 persons</td>
              </tr>
              <tr style="height:10px;"></tr>
              <tr>
                <td>High Season Summer</td>
                <td>From 15/06 - 30/09</td> 
                <td>CHF 85</td>
                <td>breakfast included</td>
                <td>if 1 person</td>
              </tr>
              <tr>
                <td>High Season Summer</td>
                <td>From 15/06 - 30/09</td> 
                <td>CHF 65</td>
                <td>breakfast included</td>
                <td>if 2 persons</td>
              </tr>
              <tr style="height:10px;"></tr>
              <tr>
                <td>Low Season Spring</td>
                <td>From 01/04 - 14/06</td> 
                <td>CHF 75</td>
                <td>breakfast included</td>
                <td>if 1 person</td>
              </tr>
              <tr>
                <td>Low Season Spring</td>
                <td>From 01/04 - 14/06</td> 
                <td>CHF 55</td>
                <td>breakfast included</td>
                <td>if 2 persons</td>
              </tr>
              <tr style="height:10px;"></tr>
              <tr>
                <td>Low Season Autumn</td>
                <td>From 01/10 - 19/12</td> 
                <td>CHF 75</td>
                <td>breakfast included</td>
                <td>if 1 person</td>
              </tr>
              <tr>
                <td>Low Season Autumn</td>
                <td>From 01/10 - 19/12</td> 
                <td>CHF 55</td>
                <td>breakfast included</td>
                <td>if 2 persons</td>
              </tr>
            </table>
            <br>
            <p>Additional tax of CHF 2 per person will be added to the prices above.<br> Please contact us for group fare.</p>
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
