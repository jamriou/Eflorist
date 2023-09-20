<?php
session_start();
#includes a PDO setup
include "./..//database_connection//connection_info.php";
include "./..//database_connection//pdo_connect.php";
include "..//locales/profile_locales.php";
#Set up PDO for SQL injection protection

try {
$pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
 } catch (Exception $e) {
   exit($e);
 }
#catches user/password submitted by html form
$OGemail = $_POST['email'];

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$postCode = $_POST['postCode'];
$state = $_POST['state'];
$country = $_POST['country'];


echo $OGemail;
echo $first;
echo $last;
echo $email;
echo $street;
echo $city;
echo $postCode;
echo $state;
echo $country;

#checks if the html form is filled
if(empty($_POST['first']) || empty($_POST['last']) || empty($_POST['email']) || empty($_POST['street']) || empty($_POST['city']) || empty($_POST['postCode']) || empty($_POST['state']) || empty($_POST['country'])){
?>
<script type="text/javascript">
alert("<?= $fillAll[$_SESSION["language"]]?>");
window.location.href = "../profile.php";
</script>
<?php
}else{

#verifies hash from database with given password (SQL injection secured)
$stmtUpdate = $pdo->prepare("UPDATE dbo.accounts SET first = ?, last = ?, email = ?, street = ?, city = ?, postCode = ?, state = ?, country = ? WHERE email = ?");
$result = $stmtUpdate->execute([$first, $last, $email, $street, $city, $postCode, $state, $country, $OGemail]);


#redirects user
session_start(); 
$_SESSION['first'] = $first;
$_SESSION['last'] = $last;
$_SESSION['email'] = $email;
$_SESSION['isAdmin'] = $isAdmin;
$_SESSION['street'] = $street;
$_SESSION['city'] = $city;
$_SESSION['postCode'] = $postCode;
$_SESSION['state'] = $state;
$_SESSION['country'] = $country;
$_SESSION['authenticated'] = true;
$_SESSION['timeOut'] = time();
header("Location: ../profile.php");
};
?>

