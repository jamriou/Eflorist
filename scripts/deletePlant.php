<?php
 session_start();

if($_SESSION['isAdmin'] == false) {
  header("Location: ..//index.php");
  }

include "..//..//database_connection//connection_info.php";
include "..//..//database_connection//pdo_connect.php";

if(isset($_SESSION['authenticated'])){
    $name=$_GET['name'];
    $category=$_GET['category'];
  try {
    $pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
  } catch(Exception $e){
    exit($e);
  }
  if($category == "tropicals") {
    $stmt = $pdo->prepare("DELETE FROM [dbo].[tropicals] WHERE tropicalName = ?");
    $result = $stmt->execute([$name]);
    $stmtCart = $pdo->prepare("DELETE FROM [dbo].[cart] WHERE plantName = ?");
    $resultCart = $stmtCart->execute([$name]);
    if($result){
        $_SESSION['successDeleteTropical'] = true;
        $_SESSION['successDeleteCacti'] = false;
        $_SESSION['successDeleteGarden'] = false;
        header("Location:../tropicals.php");
    }
  }
  if($category == "cacti") {
    $stmt = $pdo->prepare("DELETE FROM [dbo].[cactis] WHERE cactiName = ?");
    $result = $stmt->execute([$name]);
    $stmtCart = $pdo->prepare("DELETE FROM [dbo].[cart] WHERE plantName = ?");
    $resultCart = $stmtCart->execute([$name]);
    if($result){
        $_SESSION['successDeleteCacti'] = true;
        $_SESSION['successDeleteTropical'] = false;
        $_SESSION['successDeleteGarden'] = false;
        header("Location:../cacti.php");
    }
  }
  if($category == "outdoors") {
    $stmt = $pdo->prepare("DELETE FROM [dbo].[outdoors] WHERE outdoorName = ?");
    $result = $stmt->execute([$name]);
    $stmtCart = $pdo->prepare("DELETE FROM [dbo].[cart] WHERE plantName = ?");
    $resultCart = $stmtCart->execute([$name]);
    if($result){
        $_SESSION['successDeleteGarden'] = true;
        $_SESSION['successDeleteCacti'] = false;
        $_SESSION['successDeleteTropical'] = false;
        header("Location:../outdoors.php");
    }
  }
}
?>
