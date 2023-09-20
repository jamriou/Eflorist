<?php
session_start();
include "./database_connection//connection_info.php";
include "./database_connection//pdo_connect.php";
include "locales/outdoors_locales.php";

try {
  $pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
   } catch (Exception $e) {
     exit($e);
   }

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "fr";
}
if(!isset($_SESSION["successDeleteGarden"])){
  $_SESSION["successDeleteCacti"]= false;
}

if(isset($_SESSION['fromAddCartScript'])){
  if($_SESSION['fromAddCartScript']) {
    $_SESSION['fromAddCartScript'] = false;
    ?>
    <script type="text/javascript">
    alert("<?php echo strip_tags($oneType[$_SESSION['language']]);?>");
    </script>
    <?php
  }
}

$_SESSION['exists'] = false;
$_SESSION['added'] = false;
$_SESSION['successDeleteTropical'] = false;
$_SESSION['successDeleteCacti'] = false;
$_SESSION['successDeleteAquatic'] = false;

$outdoorName = array();
$outdoorDescription = array();
$outdoorDescriptionFr = array();
$outdoorQuantity = array();
$outdoorPrice = array();
$totalPlants = 0;

$stmt = $pdo->prepare("SELECT outdoorName, outdoorDescription, outdoorDescriptionFr, outdoorQuantity, outdoorPrice FROM dbo.outdoors ORDER BY outdoorName DESC");
$result = $stmt->execute();
while($row = $stmt->fetch()){
    array_push($outdoorName, $row['outdoorName']);
    array_push($outdoorDescription, $row['outdoorDescription']);
    array_push($outdoorDescriptionFr, $row['outdoorDescriptionFr']);
    array_push($outdoorQuantity, $row['outdoorQuantity']);
    array_push($outdoorPrice, $row['outdoorPrice']);
    $totalPlants = $totalPlants + 1; 
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - <?=$garden[$_SESSION['language']]?></title>
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
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1><?=$ourOutdoor[$_SESSION['language']]?></h1>
          <h2><?=$ourOutdoorDef[$_SESSION['language']]?></h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" style="text-align:center;">
          <img src="img/sprout.png" class="img-fluid" data-aos="zoom-out" width="200" height="200" data-aos-delay="100" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" style="padding: 15px;">
      <div class="container">
        <?php if($_SESSION['successDeleteGarden']) { ?>
        <div class="alert alert-success">
          <strong><?=$success[$_SESSION['language']]?></strong><?=$added[$_SESSION['language']]?>
        </div>
        <?php } ?>
        <div class="row">
        <?php
          $plant = 9;

          if(isset($_GET["page"])){
            $page = ($_GET["page"] - 1) * $plant;
          }else{
            $page = 0;
          }

            for($i = 0 + $page; $i < $page + $plant ; $i++){
              if($i == $totalPlants){
                break;
              }
          ?>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <h4 class="title"><?php echo strip_tags($outdoorName[$i]) ?></h4>
                <?php if($_SESSION['language'] == 'fr') {
                ?>
                <p class="descriptionfr"><?php echo strip_tags($outdoorDescriptionFr[$i]) ?></p>
                <?php } else { ?>
                <p class="descriptionen"><?php echo strip_tags($outdoorDescription[$i]) ?></p>
                <?php
                }
                ?>
                <h4 class="title">$ <?php echo strip_tags($outdoorPrice[$i]) ?></h4>
                <?php 
                if($outdoorQuantity[$i] > 0) { ?>
                  <h4 class="title"><a href="scripts/addCart.php?name=<?=$outdoorName[$i]?>&category=outdoors"><?=$addToCart[$_SESSION['language']]?></a></h4>
                <?php } else { ?>
                  <h4 class="titleRed"><p><?=$outOfStock[$_SESSION['language']]?></p></h4>
                <?php } 
                if($_SESSION['isAdmin']) {?>
                <a href="manage.php?name=<?=$outdoorName[$i]?>&category=outdoors" class="manage scrollto"><?=$manage[$_SESSION['language']]?></a>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box text-center">
                <img src="img/pugkin.gif" class="img-fluid animated"  width="165" height="165" alt="">
              </div>
            </div>
        </div>

        <br>


      </div>
    </section><!-- End Featured Services Section -->

    <!-- Pagination section -->
    <div class="row" style="padding-bottom: 25px">
      <div class="container d-flex justify-content-center">
        <ul class="pagination my-auto mx-auto">
        <?php 
        $previous = $_GET["page"] - 1;
        if($_GET["page"] - 1 < 1) 
          $previous = 1;

        $next = $_GET["page"] + 1;
        if($_GET["page"] + 1 >= ceil(count($outdoorName)/$plant)) 
          $next = ceil(count($outdoorName)/$plant);
        if($_GET["page"] > 1) 
          echo "<li class=\"page-item\"><a class=\"page-link\" href='./outdoors.php?page=$previous'><<</a></li>";

        for($i = 1; $i <= ceil(count($outdoorName)/$plant); $i++){   
          $active = "";
          if(($_GET["page"] == $i)) 
            $active = "active";
          echo "<li class=\"page-item $active\"><a class=\"page-link\" href='./outdoors.php?page=$i'>$i</a></li>";
        } 

        if($_GET["page"] == ceil(count($outdoorName)/$plant) -1 ) 
          echo "<li class=\"page-item\"><a class=\"page-link\" href='./outdoors.php?page=$next'>>></a></li>";
        ?>
        </ul>
        </br>
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