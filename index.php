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
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <?php include "nav/navbar.php"; ?>

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>eFlorist</span></h2>
          <p>An online store where premium quality plants of the finest quality can be found.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="tropicals.php?page=1" class="btn-get-started">Our most popular plants</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center">
          <img src="img/Logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-alt-high"></i></div>
              <h4 class="title"><a href="tropicals.php?page=1" class="stretched-link">Our tropicals</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-alt-high-fill"></i></div>
              <h4 class="title"><a href="cacti.php?page=1" class="stretched-link">Our Cacti</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-high-fill"></i></div>
              <h4 class="title"><a href="outdoors.php?page=1" class="stretched-link">Our garden seeds</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="contactUs.php" class="stretched-link">Who are we?</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
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
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="img/plant.gif" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  </main><!-- End #main -->

  <!-- ======= Footer =======  -->

  <footer id="footer" class="footer">
    <?php include "nav/footer.php"; ?>
  </footer><!-- End Footer -->

  <div id="preloader"></div>

    <!-- Main Scripts -->
  <script src="js/main.js" type="text/javascript"></script>
  <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->

  </body>

</html>