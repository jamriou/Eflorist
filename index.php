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
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" async></script>
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
            <a href="tropicals.php" class="text-decoration-none btn-get-started"><?=$h1Button[$_SESSION['language']]?></a>
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
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-plant"></i></div>
              <h4 class="title"><a class="text-decoration-none" href="tropicals.php"><?=$tropicals[$_SESSION['language']]?></a></h4>
              <p class="description"><?=$tropicalsDef[$_SESSION['language']]?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-crop-plant"></i></div>
              <h4 class="title"><a class="text-decoration-none" href="cacti.php"><?=$cacti[$_SESSION['language']]?></a></h4>
              <p class="description"><?=$cactiDef[$_SESSION['language']]?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-egg-plant"></i></div>
              <h4 class="title"><a class="text-decoration-none" href="outdoors.php"><?=$outdoors[$_SESSION['language']]?></a></h4>
              <p class="description"><?=$outdoorsDef[$_SESSION['language']]?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span><?=$contact[$_SESSION['language']]?></span>
          <h2><?=$contact[$_SESSION['language']]?></h2>
          <p><?=$contactDef[$_SESSION['language']]?></p>
        </div>

        <div class="row">

          <div class="col-lg d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4><?=$location[$_SESSION['language']]?></h4>
                <p>7 Flower Street, Maroubra NSW 2035, Australia</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4><?=$email[$_SESSION['language']]?></h4>
                <p>eflorist@support.ca</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?=$call[$_SESSION['language']]?></h4>
                <p>+1 eFl-orist</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.070666448763!2d151.24601251596695!3d-33.93931053015491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b23327945833%3A0x64573080384149c5!2s7%20Flower%20St%2C%20Maroubra%20NSW%202035%2C%20Australia!5e0!3m2!1sen!2sca!4v1621894638082!5m2!1sen!2sca" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer =======  -->

  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <h3>eFlorist<h3>
        <h4><?=$findUs[$_SESSION['language']]?> <h4>
        <div class="social-links">
          <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <br>
        <a href="#" class=""><i class="icofont-simple-up"></i></a>   
      </div>
    </div>

    <?php include "nav/footer.php"; ?>
  </footer><!-- End Footer -->
</body>

</html>