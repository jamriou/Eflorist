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
  $_SESSION["language"]= "en";
}
if(!isset($_SESSION["checkedOut"])){
  $_SESSION["checkedOut"]= false;
}
$email = $_SESSION['email'];
if(!isset($_SESSION["email"])){
  $_SESSION["email"] = null;
}


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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - <?=$cart[$_SESSION['language']]?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">
  
  <!-- Main Scripts -->
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" async></script>
  <script src="js/main.js" async></script>
</head>

<body class="d-flex flex-column min-vh-100" style="padding-top: 10px;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <?php include "nav/navbar.php"; ?>
  </header><!-- End Header -->

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
                $tropicalQuantity = 0;
                $tropicalPrice = "";
                $stmtTrop = $pdo->prepare("SELECT tropicalName, tropicalDescription, tropicalQuantity, tropicalPrice FROM dbo.tropicals WHERE tropicalName = ?");
                $result = $stmtTrop->execute([$plantName[$i]]);
                while($row = $stmtTrop->fetch()){
                  $tropicalName = $row['tropicalName'];
                  $tropicalDescription = $row['tropicalDescription'];
                  $tropicalQuantity = $row['tropicalQuantity'];
                  $tropicalPrice = $row['tropicalPrice'];
                  $totalPlant += (float)$tropicalPrice;
                }; 
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box">
                    <img></img>
                    <h4 class="title"><?php echo $tropicalName ?></h4>
                    <p class="description"><?php echo $tropicalDescription ?></p>
                    <h4 class="title">$ <?php echo $tropicalPrice ?></h4>
                    <h4 class="titleRed"><a href="scripts/removeCart.php?name=<?=$tropicalName?>"><?=$remove[$_SESSION['language']]?></a></h4>
                  </div>
                </div>
              <?php
            };
              if($category[$i] == "cacti") {

                $cactiName = "";
                $cactiDescription = "";
                $cactiQuantity = 0;
                $cactiPrice = "";
                $stmtTrop = $pdo->prepare("SELECT cactiName, cactiDescription, cactiQuantity, cactiPrice FROM dbo.cactis WHERE cactiName = ?");
                $result = $stmtTrop->execute([$plantName[$i]]);
                while($row = $stmtTrop->fetch()){
                  $cactiName = $row['cactiName'];
                  $cactiDescription = $row['cactiDescription'];
                  $cactiQuantity = $row['cactiQuantity'];
                  $cactiPrice = $row['cactiPrice'];
                  $totalPlant += (float)$cactiPrice;
                }; 
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box">
                    <img></img>
                    <h4 class="title"><?php echo $cactiName ?></h4>
                    <p class="description"><?php echo $cactiDescription ?></p>
                    <h4 class="title">$ <?php echo $cactiPrice ?></h4>
                    <h4 class="titleRed"><a href="scripts/removeCart.php?name=<?=$cactiName?>"><?=$remove[$_SESSION['language']]?></a></h4>
                  </div>
                </div>
              <?php
            };
              if($category[$i] == "outdoors") {

                $outdoorName = "";
                $outdoorDescription = "";
                $outdoorQuantity = 0;
                $outdoorPrice = "";
                $stmtTrop = $pdo->prepare("SELECT outdoorName, outdoorDescription, outdoorQuantity, outdoorPrice FROM dbo.outdoors WHERE outdoorName = ?");
                $result = $stmtTrop->execute([$plantName[$i]]);
                while($row = $stmtTrop->fetch()){
                  $outdoorName = $row['outdoorName'];
                  $outdoorDescription = $row['outdoorDescription'];
                  $outdoorQuantity = $row['outdoorQuantity'];
                  $outdoorPrice = $row['outdoorPrice'];              
                  $totalPlant += (float)$outdoorPrice;
                }; 
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box">
                    <img></img>
                    <h4 class="title"><?php echo $outdoorName ?></h4>
                    <p class="description"><?php echo $outdoorDescription ?></p>
                    <h4 class="title">$ <?php echo $outdoorPrice ?></h4>
                    <h4 class="titleRed"><a href="scripts/removeCart.php?name=<?=$outdoorName?>"><?=$remove[$_SESSION['language']]?></a></h4>
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

    <section id="total" class="featured-services" style="padding: 15px;">
      <div class="container">
        <div class="icon-box text-center">
          <?php if(isset($_SESSION['checkedOut']) && $_SESSION['checkedOut']) { ?>
            <h4 class="title"><?=$thanks[$_SESSION['language']]?></h4>
            <p class="title"><?=$order[$_SESSION['language']]?></p>
            <h4 class="title"><?=$notified[$_SESSION['language']]?></h4>
          <?php }else{?>
          <h4 class="title"><?=$total[$_SESSION['language']]?> $ <?=$totalPlant?></h4>
          <p class="title"><?=$shipping[$_SESSION['language']]?> $ 12.99</p>
          <h4 class="title"><?=$completeTotal[$_SESSION['language']]?> $ <?php echo $totalPlant + 12.99?></h4>
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
  <footer class="mt-auto" id="footer">

    <?php include "nav/footer.php"; ?>

  </footer><!-- End Footer -->

</body>

</html>