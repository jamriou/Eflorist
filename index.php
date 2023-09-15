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

<body class="d-flex flex-column min-vh-100">
  <!-- ======= Header ======= -->
  <?php include "nav/navbar.php"; ?>

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2><?=$welcomeTo[$_SESSION['language']]?><span>eFlorist</span></h2>
          <p><?=$welcomeMessage[$_SESSION['language']]?></p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="tropicals.php?page=1" class="btn-get-started"><?=$popularPlants[$_SESSION['language']]?></a>
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
              <h4 class="title"><a href="tropicals.php?page=1" class="stretched-link"><?=$tropicals[$_SESSION['language']]?></a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-alt-high-fill"></i></div>
              <h4 class="title"><a href="cacti.php?page=1" class="stretched-link"><?=$cacti[$_SESSION['language']]?></a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-high-fill"></i></div>
              <h4 class="title"><a href="outdoors.php?page=1" class="stretched-link"><?=$outdoors[$_SESSION['language']]?></a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="contactUs.php" class="stretched-link"><?=$aquatics[$_SESSION['language']]?></a></h4>
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
<!-- ======= Our Services Section ======= -->
  <section id="services" class="services sections-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-header justify-content-center">
          <h2><?=$ourServices[$_SESSION['language']]?></h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-truck"></i>
              </div>
              <h3><?=$shipping[$_SESSION['language']]?></h3>
              <p><?=$shippingDescription[$_SESSION['language']]?></p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-thermometer-snow"></i>
              </div>
              <h3><?=$freezing[$_SESSION['language']]?></h3>
              <p><?=$freezingDescription[$_SESSION['language']]?></p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-shop"></i>
              </div>
              <h3><?=$shop[$_SESSION['language']]?></h3>
              <p><?=$shopDescription[$_SESSION['language']]?></p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-clipboard-check"></i>
              </div>
              <h3><?=$garanty[$_SESSION['language']]?></h3>
              <p><?=$garantyDescription[$_SESSION['language']]?></p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-globe-americas"></i>
              </div>
              <h3><?=$globe[$_SESSION['language']]?></h3>
              <p><?=$globeDescription[$_SESSION['language']]?></p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-credit-card"></i>
              </div>
              <h3><?=$payment[$_SESSION['language']]?></h3>
              <p><?=$paymentDescription[$_SESSION['language']]?></p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer =======  -->

  <footer id="footer" class="footer">
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