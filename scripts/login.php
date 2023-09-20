<?php
session_start();
#includes a PDO setup
include "./..//database_connection//connection_info.php";
include "./..//database_connection//pdo_connect.php";
include "..//locales/login_locales.php";
#Set up PDO for SQL injection protection

try {
$pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
 } catch (Exception $e) {
   exit($e);
 }
#catches user/password submitted by html form
$email = $_POST['email'];
$passwd = $_POST['password'];

#checks if the html form is filled
if(empty($_POST['email']) || empty($_POST['password'])){
?>
<script type="text/javascript">
alert("<?= $fillAll[$_SESSION["language"]]?>");
window.location.href = "../login.php";
</script>
<?php
}else{

#verifies hash from database with given password (SQL injection secured)
$stmt = $pdo->prepare("SELECT first,last,password,isAdmin FROM dbo.accounts WHERE email=?");
$result = $stmt->execute([$email]);
while($row = $stmt->fetch()){
   $first = $row['first'];
   $last = $row['last'];
   $isAdmin = $row['isAdmin'];
   $resultHash = $row['password'];
};

#checks if hash was identical (right password)
   $result = password_verify($passwd, $resultHash);
   if($result) {
#redirects user
session_start(); 
$_SESSION['first'] = $first;
$_SESSION['last'] = $last;
$_SESSION['email'] = $email;
$_SESSION['isAdmin'] = $isAdmin;
$_SESSION['authenticated'] = true;
$_SESSION['timeOut'] = time();
header("Location: ../index.php");
      }
   ?>
<script type="text/javascript">
alert("<?= $incorrect[$_SESSION["language"]]?>");
window.location.href = "../login.php";
</script>
<?php
}
?>

