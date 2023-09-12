<?php 
session_start();
include "./..//database_connection//connection_info.php";
include "./..//database_connection//pdo_connect.php";
try {
    $pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
  } catch(Exception $e){
    exit($e);
  }

if(!isset($_SESSION['authenticated'])){
  header('Location: ..//login.php');
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

$_SESSION['checkedOut'] = false;
$email=$_SESSION["email"];
$plantName=$_GET["name"];
$category=$_GET["category"];

echo $email;
echo $plantName;
echo $category;

$stmtVerify = $pdo->prepare("SELECT COUNT(*) FROM dbo.cart WHERE plantName = ? AND email = ?");
$stmtVerify->execute([$plantName, $email]);
$result = $stmtVerify->fetchColumn();
if($result == 0) {


$stmtAdd = $pdo->prepare("INSERT INTO dbo.cart (email,plantName,category) VALUES (?,?,?)");
$stmtAdd->execute([$email,$plantName,$category]);

header("Location:..//cart.php");

} else {
    $_SESSION['fromAddCartScript'] = true;
    header("Location:..//$category.php");

}
?>