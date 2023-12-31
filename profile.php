<?php 
session_start();
include "locales/profile_locales.php";

$first = $_SESSION['first'];
$last = $_SESSION['last'];
$email = $_SESSION['email'];
$street = $_SESSION['street'];
$city = $_SESSION['city'];
$postCode = $_SESSION['postCode'];
$state = $_SESSION['state'];
$country = $_SESSION['country'];

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "fr";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - <?=$profile[$_SESSION['language']]?></title>
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
  <link href="css/profile.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- ======= Header ======= -->
  <?php include "nav/navbar.php"; ?>
  <!-- End Header -->

<main id="main">

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span><?=$profile[$_SESSION['language']]?></span>
          <h2><?=$profile[$_SESSION['language']]?></h2>
          <p><?=$profileDef[$_SESSION['language']]?></p>
        </div>

        <div class="container rounded bg-white mt-5 mb-5">
          <div class="row">
              <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <img class="rounded-circle mt-5" width="150px" src="img/user.png">
                  <span class="font-weight-bold"><?=$first?> <?=$last?></span>
                  <span class="text-black-50"><?=$email?></span>
                  <span class="text-black-50"><?=$street?></span>
                  <span class="text-black-50"><?=$city?></span>
                  <span class="text-black-50"><?=$postCode?></span>
                  <span class="text-black-50"><?=$state?></span>
                  <span class="text-black-50"><?=$country?></span>
                  <span> </span>
                </div>
              </div>
              <form action="scripts/modifyProfile.php" method="post" name="modifyProfile" class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right"><?=$settings[$_SESSION['language']]?></h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels"><?=$nameL[$_SESSION['language']]?></label><input type="first" name="first" id="first" class="form-control" maxlength="30" placeholder="<?=$first?>" value="<?=$first?>"></div>
                        <div class="col-md-6"><label class="labels"><?=$surnameL[$_SESSION['language']]?></label><input type="last" name="last" id="last" class="form-control" maxlength="30" placeholder="<?=$last?>" value="<?=$last?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels"><?=$mobileL[$_SESSION['language']]?></label><input type="phone" name="phone" id="phone" class="form-control" placeholder="<?=$notAvailable[$_SESSION['language']]?>" value="" disabled></div>
                        <div class="col-md-12"><label class="labels"><?=$addressL[$_SESSION['language']]?></label><input type="street" name="street" id="street" class="form-control" maxlength="50" placeholder="<?=$street?>" value="<?=$street?>"></div>
                        <div class="col-md-12"><label class="labels"><?=$cityL[$_SESSION['language']]?></label><input type="city" name="city" id="city" class="form-control" maxlength="30" placeholder="<?=$city?>" value="<?=$city?>"></div>
                        <div class="col-md-12"><label class="labels"><?=$postCodeL[$_SESSION['language']]?></label><input type="postCode" name="postCode" id="postCode" class="form-control" maxlength="7" placeholder="<?=$postCode?>" value="<?=$postCode?>"></div>
                        <div class="col-md-12"><label class="labels"><?=$emailL[$_SESSION['language']]?></label><input type="email" name="email" id="email" class="form-control" maxlength="50" placeholder="<?=$email?>" value="<?=$email?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels"><?=$countryL[$_SESSION['language']]?></label><input type="country" name="country" id="country" class="form-control" maxlength="30" placeholder="<?=$country?>" value="<?=$country?>"></div>
                        <div class="col-md-6"><label class="labels"><?=$stateL[$_SESSION['language']]?></label><input type="state" name="state" id="state" class="form-control" maxlength="20" value="<?=$state?>" placeholder="<?=$state?>"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"><?=$save[$_SESSION['language']]?></button></div>
                </div>
              </form>
              <div class="col-md-4">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center experience">
                        <span><?=$editPassword[$_SESSION['language']]?></span>
                        <button class="btn btn-primary profile-button" type="button"><?=$confirm[$_SESSION['language']]?></button>
                      </div><br>
                      <div class="col-md-12"><label class="labels"><?=$enterPassword[$_SESSION['language']]?></label><input type="text" maxlength="50" class="form-control" placeholder="********" value="" disabled></div> <br>
                      <div class="col-md-12"><label class="labels"><?=$confirmPassword[$_SESSION['language']]?></label><input type="text" maxlength="50" class="form-control" placeholder="********" value="" disabled></div>
                  </div>
              </div>
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