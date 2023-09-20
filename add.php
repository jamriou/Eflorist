<?php
session_start();
include "locales/add_locales.php";
include "./database_connection//connection_info.php";
include "./database_connection//pdo_connect.php";

if($_SESSION['isAdmin'] == false) {
  header("Location: index.php");
}

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "fr";
}

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - <?=$titlePage[$_SESSION['language']]?></title>
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

  </header><!-- End Header -->

  <main id="main">

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact"> <br> <br>
      <div class="container">
      <?php if($_SESSION['added']) { ?>
      <div class="alert alert-success">
        <strong><?=$success[$_SESSION['language']]?></strong><?=$added[$_SESSION['language']]?>
      </div>
      <?php } ?>
      <?php if($_SESSION['exists']) { ?>
      <div class="alert alert-danger">
        <strong><?=$oops[$_SESSION['language']]?></strong><?=$alreadyExists[$_SESSION['language']]?>
      </div>
      <?php } ?>
        <div class="section-title">
          <span><?=$manage[$_SESSION['language']]?></span>
          <h2><?=$manage[$_SESSION['language']]?></h2>
          <p><?=$manageDef[$_SESSION['language']]?></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
            <h3><?=$how[$_SESSION['language']]?></h3>
            <ul>
              <li><?=$bullet1[$_SESSION['language']]?></li>
              <li><?=$bullet2[$_SESSION['language']]?></li>
              <li><?=$bullet3[$_SESSION['language']]?></li>
            </ul>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="scripts/addPlant.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="name"><?=$category[$_SESSION['language']]?></label>
                  <select id="category" name="category" class="form-control">
                    <option value="tropicals"><?=$tropical[$_SESSION['language']]?></option>
                    <option value="cacti"><?=$cactus[$_SESSION['language']]?></option>
                    <option value="outdoors"><?=$garden[$_SESSION['language']]?></option>
                    <option value="aquatics"><?=$aquatic[$_SESSION['language']]?></option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="name"><?=$quantity[$_SESSION['language']]?></label>
                  <input type="number" class="form-control" name="quantity" min=0 maxlength="3" id="quantity" placeholder="0" data-rule="required" data-msg="Please enter a valid number" />
                </div>
                <div class="form-group col-md-4">
                  <label for="name"><?=$price[$_SESSION['language']]?></label>
                  <input type="number" step="0.01" class="form-control" name="price" min=0 maxlength="7" id="price" placeholder="1.99" data-rule="required" data-msg="Please enter a valid number" />
                </div>
              </div>
              <div class="form-group">
                <label for="name"><?=$name[$_SESSION['language']]?></label>
                <input type="text" class="form-control" name="name" id="name" data-rule="minlen:4" maxlength="100" placeholder="ex: Tradescantia Spathacea" data-msg="Please enter at least 8 chars of subject" />
              </div>
              <div class="form-group">
                <label for="name"><?=$descriptionfr[$_SESSION['language']]?></label>
                <textarea class="form-control" name="descriptionfr" rows="10" data-rule="required" placeholder="<?=$descPH[$_SESSION['language']]?>" data-msg="Please write something to describe the plant"></textarea>
              </div>
              <div class="form-group">
                <label for="name"><?=$descriptionen[$_SESSION['language']]?></label>
                <textarea class="form-control" name="descriptionen" rows="10" data-rule="required" placeholder="<?=$descPH[$_SESSION['language']]?>" data-msg="Please write something to describe the plant"></textarea>
              </div>
              <div class="text-center"><button type="submit"><?=$add[$_SESSION['language']]?></button></div>
            </form>
          </div>
        </div>
      </div>
      <div id="footer" class="container">
        <div class="footer-top">
          <br><br> 
          <h2><?=$pro[$_SESSION['language']]?></h2>

          <h3><?=$tip[$_SESSION['language']]?></h3>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
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