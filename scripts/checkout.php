<?php 
session_start();

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "en";
}

include "..//locales/cart_locales.php";
include "./..//database_connection//connection_info.php";
include "./..//database_connection//pdo_connect.php";

$plantName = array();
$category = array();
$email = $_SESSION['email'];

try {
  $pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
   } catch (Exception $e) {
     exit($e);
   }
  
  $stmt = $pdo->prepare("SELECT plantName, category  FROM dbo.cart WHERE email = ?");
  $result = $stmt->execute([$email]);
  while($row = $stmt->fetch()){
     array_push($plantName, $row['plantName']);
     array_push($category, $row['category']);
  };

  for($i = 0; $i < count($plantName); $i++){
    if($plantName[$i] == null){
    break;
    }
    if($category[$i] == "tropicals") {

        $stmtTrop = $pdo->prepare("SELECT tropicalQuantity FROM dbo.tropicals WHERE tropicalName = ?");
        $result = $stmtTrop->execute([$plantName[$i]]);
        while($row = $stmtTrop->fetch()){
          $tropicalQuantity = $row['tropicalQuantity'];
        }; 
    
        $newQuantity = (int)$tropicalQuantity - 1;
        $stmtUpdate = $pdo->prepare("UPDATE dbo.tropicals SET tropicalQuantity = ? WHERE tropicalName = ?");
        $result = $stmtUpdate->execute([$newQuantity, $plantName[$i]]);
    };
    if($category[$i] == "cacti") {

        $stmtTrop = $pdo->prepare("SELECT cactiQuantity FROM dbo.cactis WHERE cactiName = ?");
        $result = $stmtTrop->execute([$plantName[$i]]);
        while($row = $stmtTrop->fetch()){
          $cactiQuantity = $row['cactiQuantity'];
        }; 
    
        $newQuantity = (int)$cactiQuantity - 1;
        $stmtUpdate = $pdo->prepare("UPDATE dbo.cactis SET cactiQuantity = ? WHERE cactiName = ?");
        $result = $stmtUpdate->execute([$newQuantity, $plantName[$i]]);
    };
    if($category[$i] == "outdoors") {

        $stmtTrop = $pdo->prepare("SELECT outdoorQuantity FROM dbo.outdoors WHERE outdoorName = ?");
        $result = $stmtTrop->execute([$plantName[$i]]);
        while($row = $stmtTrop->fetch()){
          $outdoorQuantity = $row['outdoorQuantity'];
        }; 
    
        $newQuantity = (int)$outdoorQuantity - 1;
        $stmtUpdate = $pdo->prepare("UPDATE dbo.outdoors SET outdoorQuantity = ? WHERE outdoorName = ?");
        $result = $stmtUpdate->execute([$newQuantity, $plantName[$i]]);
    };
}

$stmtUpdate = $pdo->prepare("DELETE FROM dbo.cart WHERE email = ?");
$result = $stmtUpdate->execute([$email]);

$_SESSION['checkedOut'] = true;

header("Refresh: 5;..//cart.php");
  
?>
<style>
.main-wrapper {
  height: 100%;  
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eFlorist - <?=$checkout[$_SESSION['language']]?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="..//img/favicon.ico" rel="icon">


  <!-- Vendor CSS Files -->
  <link href="..//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="..//css/index.css" rel="stylesheet">

</head>

<body class="">

    <main class="">
      <div class="main-wrapper d-flex flex-column justify-content-center align-items-center text-center">
        <!--<div class="spinner-grow text-success" role="status" style="width: 3rem; height: 3rem;">
            <span class="sr-only">Loading...</span> -->
          <img src="..//img/cactus-happy.gif" style="margin-right: 100px">
          <p><?=$confirming[$_SESSION['language']]?></p>
      </div>
      <br>
    </div>
    </main> 

</body>

</html>