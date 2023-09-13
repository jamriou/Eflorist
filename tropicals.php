<?php 
session_start();
include "./database_connection//connection_info.php";
include "./database_connection//pdo_connect.php";
include "locales/tropicals_locales.php";

try {
  $pdo = new PDO($dsn, $connectionId, $connectionPasswd);
   } catch (Exception $e) {
     exit($e);
   }

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "en";
}
if(!isset($_SESSION["successDeleteTropical"])){
  $_SESSION["successDeleteCacti"]= false;
}


if(isset($_SESSION['fromAddCartScript'])){
  if($_SESSION['fromAddCartScript']) {
    $_SESSION['fromAddCartScript'] = false;
    ?>
    <script type="text/javascript">
    alert("<?php echo $oneType[$_SESSION['language']]; ?>");
    </script>
    <?php
  }
}

$_SESSION['exists'] = false;
$_SESSION['added'] = false;
$_SESSION['successDeleteCacti'] = false;
$_SESSION['successDeleteGarden'] = false;

$tropicalName = array();
$tropicalDescription = array();
$tropicalQuantity = array();
$tropicalPrice = array();

$stmt = $pdo->prepare("SELECT tropicalName, tropicalDescription, tropicalQuantity, tropicalPrice FROM dbo.tropicals ORDER BY tropicalName DESC");
$result = $stmt->execute();
while($row = $stmt->fetch()){
    array_push($tropicalName, $row['tropicalName']);
    array_push($tropicalDescription, $row['tropicalDescription']);
    array_push($tropicalQuantity, $row['tropicalQuantity']);
    array_push($tropicalPrice, $row['tropicalPrice']);
};
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - Tropicals</title>
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
  <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript" async></script>
  <script src="js/main.js" type="text/javascript" async></script>
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
          <h1><?=$ourTropicals[$_SESSION['language']]?></h1>
          <h2><?=$ourTropicalsDef[$_SESSION['language']]?></h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="img/tropicalfeey.gif" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" style="padding: 15px;">
      <div class="container">
        <?php if($_SESSION['successDeleteTropical']) { ?>
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
            if($tropicalName[$i] == null){
              break;
            }
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <img></img>
              <h4 class="title"><?php echo $tropicalName[$i] ?></h4>
              <p class="description"><?php echo $tropicalDescription[$i] ?></p>
              <h4 class="title">$ <?php echo $tropicalPrice[$i] ?></h4>
              <?php 
              if($tropicalQuantity[$i] > 0) { ?>
                <h4 class="title"><a href="scripts/addCart.php?name=<?=$tropicalName[$i]?>&category=tropicals"><?=$addToCart[$_SESSION['language']]?></a></h4>
              <?php } else { ?>
                <h4 class="titleRed"><p><?=$outOfStock[$_SESSION['language']]?></p></h4>
              <?php } 
              if($_SESSION['isAdmin']) {?>
              <a href="manage.php?name=<?=$tropicalName[$i]?>&category=tropicals" class="manage scrollto"><?=$manage[$_SESSION['language']]?></a>
              <?php } ?>
            </div>
          </div>
          <?php } ?>
        </div>

        <br>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- Pagination section -->
    <div class="row" style="padding-bottom: 25px;">
      <div class="container d-flex justify-content-center">
        <ul class="pagination my-auto mx-auto">
        <?php 
        $previous = $_GET["page"] - 1;
        if($_GET["page"] - 1 < 1) 
          $previous = 1;

        $next = $_GET["page"] + 1;
        if($_GET["page"] + 1 >= ceil(count($tropicalName)/$plant)) 
          $next = ceil(count($tropicalName)/$plant);
        if($_GET["page"] > 1) 
          echo "<li class=\"page-item\"><a class=\"page-link\" href='./tropicals.php?page=$previous'><<</a></li>";

        for($i = 1; $i <= ceil(count($tropicalName)/$plant); $i++){   
          $active = "";
          if(($_GET["page"] == $i)) 
            $active = "active";
          echo "<li class=\"page-item $active\"><a class=\"page-link\" href='./tropicals.php?page=$i'>$i</a></li>";
        } 

        if($_GET["page"] == ceil(count($tropicalName)/$plant) -1 ) 
          echo "<li class=\"page-item\"><a class=\"page-link\" href='./tropicals.php?page=$next'>>></a></li>";
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

</body>

</html>