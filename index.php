<?php 
session_start();
if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "en";
}

include "locales/index_locales.php";

$_SESSION['exists'] = false;
$_SESSION['added'] = false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - Home</title>
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
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" async></script>
  <script src="vendor/jquery/jquery.min.js"defer></script>
  <script src="js/main.js" async></script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <?php include "nav/navbar.php"; ?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <?php 
          if(!isset($_SESSION['authenticated'])) {?>
          <h1><?=$h1Title[$_SESSION['language']]?></h1>
          <h2><?=$h1UnderTitle[$_SESSION['language']]?></h2>
          <?php }
          if(isset($_SESSION['authenticated'])) {?>
          <h1><?=$welcome[$_SESSION['language']]?>, <?=$_SESSION['first']?>!</h1>
          <h2><?=$ready[$_SESSION['language']]?></h2>
          <?php } ?>
          <div class="d-flex">
            <a href="tropicals.php" class="btn-get-started"><?=$h1Button[$_SESSION['language']]?></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="img/plant.gif" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" style="padding: 15px;">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-plant"></i></div>
              <h4 class="title"><a href="tropicals.php"><?=$tropicals[$_SESSION['language']]?></a></h4>
              <p class="description"><?=$tropicalsDef[$_SESSION['language']]?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-crop-plant"></i></div>
              <h4 class="title"><a href="cacti.php"><?=$cacti[$_SESSION['language']]?></a></h4>
              <p class="description"><?=$cactiDef[$_SESSION['language']]?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-egg-plant"></i></div>
              <h4 class="title"><a href="outdoors.php"><?=$outdoors[$_SESSION['language']]?></a></h4>
              <p class="description"><?=$outdoorsDef[$_SESSION['language']]?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer =======  -->

  <footer id="footer" class="w-100 py-4 flex-shrink-0">
    <?php include "nav/footer.php"; ?>
  </footer><!-- End Footer -->
</body>

</html>