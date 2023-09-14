<?php 
session_start();
include "locales/contactUs_locales.php";
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
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100" style="padding-top: 50px;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <?php include "nav/navbar.php"; ?>
  </header><!-- End Header -->

<main id="main">

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