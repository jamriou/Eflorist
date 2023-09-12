<?php
include "..//..//database_connection//connection_info.php";
include "..//..//database_connection//pdo_connect.php";
 session_start();
if(isset($_SESSION['authenticated'])){
    $name=$_GET['name'];
  try {
    $pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
  } catch(Exception $e){
    exit($e);
  }
    $stmt = $pdo->prepare("DELETE FROM [dbo].[cart] WHERE plantName = ?");
    $result = $stmt->execute([$name]);
    if($result){
        header("Location:../cart.php");
    }
}
?>
