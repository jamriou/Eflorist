<?php 
session_start();
include "locales/cart_locales.php";
include "./database_connection//connection_info.php";
include "./database_connection//pdo_connect.php";

try {
  $pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
   } catch (Exception $e) {
     exit($e);
   }
  
if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "fr";
}
if(!isset($_SESSION["checkedOut"])){
  $_SESSION["checkedOut"]= false;
}
if(!isset($_SESSION["email"])){
  $_SESSION["email"] = null;
}
$email = $_SESSION['email'];


$_SESSION['exists'] = false;
$_SESSION['added'] = false;

$plantName = array();
$category = array();
$totalPlant = 0.00;

$stmt = $pdo->prepare("SELECT plantName, category FROM dbo.cart WHERE email = ?");
$result = $stmt->execute([$email]);
while($row = $stmt->fetch()){
    array_push($plantName, $row['plantName']);
    array_push($category, $row['category']);
};

if(isset($_SESSION['authenticated'])) {
  if(time()-$_SESSION['timeOut'] > 3000) 
  { 
    $lang = $_SESSION['language'];
    session_unset(); 
    session_destroy(); 
  ?>
    <script type="text/javascript">
    alert("<?=$loginAgain[$lang]?>");
    window.location.href = "login.php";
    </script>
    <?php
  } 
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - <?=$cart[$_SESSION['language']]?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <meta http-equiv="Content-Security-Policy" 
      content="script-src 'self' https://apis.google.com">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- ======= Header ======= -->
  <?php include "nav/navbar.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="heroCart" class="d-flex align-items-center">

    <div class="container">
          <h1><?=$cart[$_SESSION['language']]?></h1>
          <h2><?=$cartDef[$_SESSION['language']]?></h2>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">
        <div class="row">
          <?php
          for($i = 0; $i < count($plantName); $i++){
            if($plantName[$i] == null){
            break;
            }
            if($category[$i] == "tropicals") {

                $tropicalName = "";
                $tropicalDescription = "";
                $tropicalDescriptionFr = "";
                $tropicalQuantity = 0;
                $tropicalPrice = "";
                $stmtTrop = $pdo->prepare("SELECT tropicalName, tropicalDescription, tropicalDescriptionFr, tropicalQuantity, tropicalPrice FROM dbo.tropicals WHERE tropicalName = ? ORDER BY tropicalName DESC");
                $result = $stmtTrop->execute([$plantName[$i]]);
                while($row = $stmtTrop->fetch()){
                  $tropicalName = $row['tropicalName'];
                  $tropicalDescription = $row['tropicalDescription'];
                  $tropicalDescriptionFr = $row['tropicalDescriptionFr'];
                  $tropicalQuantity = $row['tropicalQuantity'];
                  $tropicalPrice = $row['tropicalPrice'];
                  $totalPlant += (float)$tropicalPrice;
                }; 
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box">
                    <img></img>
                    <h4 class="title"><?php echo strip_tags($tropicalName) ?></h4>
                    <?php if($_SESSION['language'] == 'fr') {
                      ?>
                    <p class="descriptionfr"><?php echo strip_tags($tropicalDescriptionFr) ?></p>
                    <?php } else { ?>
                    <p class="descriptionen"><?php echo strip_tags($tropicalDescription) ?></p>
                    <?php
                    }
                    ?>
                    <h4 class="title">$ <?php echo strip_tags($tropicalPrice)?></h4>
                    <h4 class="titleRed"><a href="scripts/removeCart.php?name=<?=$tropicalName?>"><?=$remove[$_SESSION['language']]?></a></h4>
                  </div>
                </div>
              <?php
            };
              if($category[$i] == "cacti") {

                $cactiName = "";
                $cactiDescription = "";
                $cactiDescriptionFr = "";
                $cactiQuantity = 0;
                $cactiPrice = "";
                $stmtTrop = $pdo->prepare("SELECT cactiName, cactiDescription, cactiDescriptionFr, cactiQuantity, cactiPrice FROM dbo.cactis WHERE cactiName = ? ORDER BY cactiName DESC");
                $result = $stmtTrop->execute([$plantName[$i]]);
                while($row = $stmtTrop->fetch()){
                  $cactiName = $row['cactiName'];
                  $cactiDescription = $row['cactiDescription'];
                  $cactiDescriptionFr = $row['cactiDescriptionFr'];
                  $cactiQuantity = $row['cactiQuantity'];
                  $cactiPrice = $row['cactiPrice'];
                  $totalPlant += (float)$cactiPrice;
                }; 
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box">
                    <img></img>
                    <h4 class="title"><?php echo strip_tags($cactiName)?></h4>
                    <?php if($_SESSION['language'] == 'fr') {
                      ?>
                    <p class="descriptionfr"><?php echo strip_tags($cactiDescriptionFr) ?></p>
                    <?php } else { ?>
                    <p class="descriptionen"><?php echo strip_tags($cactiDescription) ?></p>
                    <?php
                    }
                    ?>
                    <h4 class="title">$ <?php echo strip_tags($cactiPrice)?></h4>
                    <h4 class="titleRed"><a href="scripts/removeCart.php?name=<?=$cactiName?>"><?=$remove[$_SESSION['language']]?></a></h4>
                  </div>
                </div>
              <?php
            };
              if($category[$i] == "outdoors") {

                $outdoorName = "";
                $outdoorDescription = "";
                $outdoorDescriptionFr = "";
                $outdoorQuantity = 0;
                $outdoorPrice = "";
                $stmtTrop = $pdo->prepare("SELECT outdoorName, outdoorDescription, outdoorDescriptionFr, outdoorQuantity, outdoorPrice FROM dbo.outdoors WHERE outdoorName = ? ORDER BY outdoorName DESC");
                $result = $stmtTrop->execute([$plantName[$i]]);
                while($row = $stmtTrop->fetch()){
                  $outdoorName = $row['outdoorName'];
                  $outdoorDescription = $row['outdoorDescription'];
                  $outdoorDescriptionFr = $row['outdoorDescriptionFr'];
                  $outdoorQuantity = $row['outdoorQuantity'];
                  $outdoorPrice = $row['outdoorPrice'];              
                  $totalPlant += (float)$outdoorPrice;
                }; 
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box">
                    <img></img>
                    <h4 class="title"><?php echo strip_tags($outdoorName)?></h4>
                    <?php if($_SESSION['language'] == 'fr') {
                    ?>
                    <p class="descriptionfr"><?php echo strip_tags($outdoorDescriptionFr) ?></p>
                    <?php } else { ?>
                    <p class="descriptionen"><?php echo strip_tags($outdoorDescription) ?></p>
                    <?php
                    }
                    ?>
                    <h4 class="title">$ <?php echo strip_tags($outdoorPrice)?></h4>
                    <h4 class="titleRed"><a href="scripts/removeCart.php?name=<?=$outdoorName?>"><?=$remove[$_SESSION['language']]?></a></h4>
                  </div>
                </div>
              <?php
            };
              if($category[$i] == "aquatics") {

                $aquaticName = "";
                $aquaticDescription = "";
                $aquaticDescriptionFr = "";
                $aquaticQuantity = 0;
                $aquaticPrice = "";
                $stmtTrop = $pdo->prepare("SELECT aquaticName, aquaticDescription, aquaticDescriptionFr, aquaticQuantity, aquaticPrice FROM dbo.aquatics WHERE aquaticName = ? ORDER BY aquaticName DESC");
                $result = $stmtTrop->execute([$plantName[$i]]);
                while($row = $stmtTrop->fetch()){
                  $aquaticName = $row['aquaticName'];
                  $aquaticDescription = $row['aquaticDescription'];
                  $aquaticDescriptionFr = $row['aquaticDescriptionFr'];
                  $aquaticQuantity = $row['aquaticQuantity'];
                  $aquaticPrice = $row['aquaticPrice'];              
                  $totalPlant += (float)$aquaticPrice;
                }; 
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box">
                    <img></img>
                    <h4 class="title"><?php echo strip_tags($aquaticName)?></h4>
                    <?php if($_SESSION['language'] == 'fr') {
                    ?>
                    <p class="descriptionfr"><?php echo strip_tags($aquaticDescriptionFr) ?></p>
                    <?php } else { ?>
                    <p class="descriptionen"><?php echo strip_tags($aquaticDescription) ?></p>
                    <?php
                    }
                    ?>
                    <h4 class="title">$ <?php echo strip_tags($aquaticPrice)?></h4>
                    <h4 class="titleRed"><a href="scripts/removeCart.php?name=<?=$aquaticName?>"><?=$remove[$_SESSION['language']]?></a></h4>
                  </div>
                </div>
              <?php
            };
          }
          if(count($plantName) == 0) {
            ?>
              <!-- ======= Hero Section ======= -->
              <section id="heroCart" class="d-flex align-items-center">

              <div class="container">
                <div class="row">
                <?php if($_SESSION['checkedOut']) { ?>
                  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1><?=$thankyou[$_SESSION['language']]?></h1>
                    <h2><?=$cactusHappy[$_SESSION['language']]?></h2>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="img/cactus.gif" class="img-fluid animated" alt="">
                  </div>
                <?php }else{ ?>
                  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1><?=$ohNo[$_SESSION['language']]?></h1>
                    <h2><?=$empty[$_SESSION['language']]?></h2>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="img/crying.gif" class="img-fluid animated" alt="">
                  </div>
                <?php } ?>
                </div>
              </div>

              </section><!-- End Hero -->
            <?php
          }
          ?>
      </div>
      <br>
    </section><!-- End Featured Services Section -->

    <section class="featured-services" style="padding: 15px;">
      <div class="container">
        <div class="icon-box text-center">
          <?php if(isset($_SESSION['checkedOut']) && $_SESSION['checkedOut']) { ?>
            <h4 class="title"><?=$thanks[$_SESSION['language']]?></h4>
            <p class="title"><?=$order[$_SESSION['language']]?></p>
            <h4 class="title"><?=$notified[$_SESSION['language']]?></h4>
          <?php }else{?>
          <h4 class="title"><?=$total[$_SESSION['language']]?> $ <?=$totalPlant?></h4>
          <p class="title"><?=$shipping[$_SESSION['language']]?> $ 12.99</p>
          <h4 class="title"><?=$completeTotal[$_SESSION['language']]?> $ <?php echo strip_tags($totalPlant) + 12.99?></h4>
          <?php
          if(count($plantName) != 0) {
            ?>
          <a href="scripts/checkout.php" class="checkout scrollto"><?=$checkout[$_SESSION['language']]?></a>
          <?php 
            }
          }
          ?>

        </div>
      </div>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="w-100 py-4 flex-shrink-0">
    <?php include "nav/footer.php"; ?>
  </footer><!-- End Footer -->

  <div id="preloader"></div>

  <!-- Main Scripts -->
  <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js" type="text/javascript"></script>

</body>

</html>