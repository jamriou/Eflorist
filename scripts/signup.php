<?php
session_start();
#includes a PDO setup
include "./..//database_connection//connection_info.php";
include "./..//database_connection//pdo_connect.php";
include "..//locales/signup_locales.php";
#Set up PDO for SQL injection protection

try {
$pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
 } catch (Exception $e) {
   exit($e);
 }

#catches first/last/email/password submitted by html form
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$passwd = $_POST['password'];
$passwdHashed = password_hash($passwd, PASSWORD_DEFAULT);
$isAdmin = 0;

#checks if the html form is filled
if(empty($_POST['email']) || empty($_POST['password'])|| empty($_POST['first'])|| empty($_POST['last'])){
?>
<script type="text/javascript">
alert("<?= $fillAll[$_SESSION["language"]]?>");
window.location.href = "../signup.php";
</script>
<?php
}

//verifies if email already exists
$result = "";
$stmt1 = $pdo->prepare("SELECT first FROM dbo.accounts WHERE email = ?");
    $stmt1->execute([$email]);
    while($row = $stmt1->fetch()){
    if(!empty($row['first'])) {
      ?>
      <script type="text/javascript">
      window.location.href = "../login.php";
      alert("<?= $alreadyExists[$_SESSION["language"]]?>");
      </script>
      <?php
    }
   }

//adds user to database
$stmt = $pdo->prepare("INSERT INTO dbo.accounts (first,last,email,password,isAdmin) VALUES (?,?,?,?,?)");
$stmt->execute([$first,$last,$email,$passwdHashed,$isAdmin]);

header("Location: ../index.php");
$_SESSION['first'] = $first;
$_SESSION['isAdmin'] = $isAdmin;
$_SESSION['authenticated'] = true;
$_SESSION['email'] = $email;
?>

