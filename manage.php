<?php
session_start();

if($_SESSION['isAdmin'] == false) {
  header("Location: index.php");
  }

#includes a PDO setup
include "./database_connection//connection_info.php";
include "./database_connection//pdo_connect.php";
include "locales/manage_locales.php";
#Set up PDO for SQL injection protection

try {
$pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
 } catch (Exception $e) {
   exit($e);
 }

 if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "en";
}

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "en";
}

if(time()-$_SESSION['timeOut'] > 1000) 
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

$plantName = $_GET['name'];
$categoryPlant = $_GET['category'];

if($categoryPlant =="tropicals") {
 $stmt = $pdo->prepare("SELECT tropicalName, tropicalDescription, tropicalQuantity, tropicalPrice FROM dbo.tropicals WHERE tropicalName = ?");
  $result = $stmt->execute([$plantName]);
  while($row = $stmt->fetch()){
     $name = $row['tropicalName'];
     $description = $row['tropicalDescription'];
     $quantity = $row['tropicalQuantity'];
     $price = $row['tropicalPrice'];
  };
}
if($categoryPlant =="cacti") {
  $stmt = $pdo->prepare("SELECT cactiName, cactiDescription, cactiQuantity, cactiPrice FROM dbo.cactis WHERE cactiName = ?");
   $result = $stmt->execute([$plantName]);
   while($row = $stmt->fetch()){
      $name = $row['cactiName'];
      $description = $row['cactiDescription'];
      $quantity = $row['cactiQuantity'];
      $price = $row['cactiPrice'];
   };
 }
 if($categoryPlant =="outdoors") {
  $stmt = $pdo->prepare("SELECT outdoorName, outdoorDescription, outdoorQuantity, outdoorPrice FROM dbo.outdoors WHERE outdoorName = ?");
   $result = $stmt->execute([$plantName]);
   while($row = $stmt->fetch()){
      $name = $row['outdoorName'];
      $description = $row['outdoorDescription'];
      $quantity = $row['outdoorQuantity'];
      $price = $row['outdoorPrice'];
   };
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

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <?php include "nav/navbar.php"; ?>

    </div>
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
          <p><?=$currentlyManaging[$_SESSION['language']]?><?=$plantName?></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <h3><?=$protips[$_SESSION['language']]?></h3>
              <ul>
                <li><?=$bullet1[$_SESSION['language']]?></li>
                <li><?=$bullet2[$_SESSION['language']]?></li>
                <li><?=$bullet3[$_SESSION['language']]?></li>
              </ul>
              <h3><?=$delete[$_SESSION['language']]?></h3>
              <div class="php-email-form-danger text-center"><a href="scripts/deletePlant.php?name=<?=$name?>&category=<?=$categoryPlant?>"><button type="submit"><?=$yes[$_SESSION['language']]?></button></a></div>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="scripts/managePlant.php?name=<?=$name?>&category=<?=$categoryPlant?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="name"><?=$categoryForm[$_SESSION['language']]?></label>
                  <select id="category" name="category" class="form-control">
                    <option value="cacti" <?php if($categoryPlant == "cacti") echo "selected"; ?>><?=$cactus[$_SESSION['language']]?></option>
                    <option value="outdoors" <?php if($categoryPlant == "outdoors") echo "selected"; ?>><?=$garden[$_SESSION['language']]?></option>
                    <option value="tropicals" <?php if($categoryPlant == "tropicals") echo "selected"; ?>><?=$tropical[$_SESSION['language']]?></option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="name"><?=$quantityForm[$_SESSION['language']]?></label>
                  <input type="number" class="form-control" value="<?=$quantity?>" name="quantity" placeholder="0" min=0 id="quantity" data-rule="required" data-msg="Please enter a valid number" />
                </div>
                <div class="form-group col-md-4">
                  <label for="name"><?=$priceForm[$_SESSION['language']]?></label>
                  <input type="number" step="0.01" class="form-control" value="<?=$price?>" name="price" placeholder="1.99" min=0 id="price" data-rule="required" data-msg="Please enter a valid number" />
                </div>
              </div>
              <div class="form-group">
                <label for="name"><?=$nameForm[$_SESSION['language']]?></label>
                <input type="text" class="form-control" name="name" id="name" value="<?=$name?>" placeholder="ex: Tradescantia Spathacea" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              </div>
              <div class="form-group">
                <label for="name"><?=$descriptionForm[$_SESSION['language']]?></label>
                <textarea class="form-control" name="description" rows="10" data-rule="required" placeholder="<?=$descPH[$_SESSION['language']]?>" data-msg="Please write something to describe the plant"><?=$description?></textarea>
              </div>
              <div class="text-center"><button type="submit"><?=$updated[$_SESSION['language']]?></button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">

      <div class="container">

        <br><br> 
        <h2><?=$pro[$_SESSION['language']]?></h2>
  
        <h3><?=$tip[$_SESSION['language']]?></h3>
      </div>
    </div>

    <?php include "nav/footer.php"; ?>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>

</html>