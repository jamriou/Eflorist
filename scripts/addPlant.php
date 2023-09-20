<?php
session_start();
#includes a PDO setup
include "./..//database_connection//connection_info.php";
include "./..//database_connection//pdo_connect.php";
include "..//locales/add_locales.php";
#Set up PDO for SQL injection protection

try {
$pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
 } catch (Exception $e) {
   exit($e);
 }

if($_SESSION['isAdmin'] == false) {
header("Location: ..//index.php");
}

#catches user/password submitted by html form
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

#checks if the html form is filled
if(empty($_POST['category']) || empty($_POST['quantity']) || empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price'])){
?>
<script type="text/javascript">
alert("<?= $fillAll[$_SESSION["language"]]?>");
window.location.href = "../add.php";
</script>
<?php
}else{
    if($category == "tropicals") {
        $stmt = $pdo->prepare("SELECT tropicalName FROM dbo.tropicals WHERE tropicalName = ?");
        $stmt->execute([$name]);
        while($row = $stmt->fetch()){
            $result = $row['tropicalName'];
        }
        if($result == null){
            $stmtTropical = $pdo->prepare("INSERT INTO dbo.tropicals (tropicalName,tropicalDescription,tropicalQuantity,tropicalPrice) VALUES (?,?,?,?)");
            $stmtTropical->execute([$name,$description,$quantity,$price]);
            $_SESSION['added'] = true;
            $_SESSION['exists'] = false;
            header("Location: ../add.php");
        } else {
            $_SESSION['exists'] = true;
            $_SESSION['added'] = false;
            ?>
            <script type="text/javascript">
            window.location.href = "../add.php";
            </script>
            <?php
        }
    }
    if($category == "cacti") {
        $stmt = $pdo->prepare("SELECT cactiName FROM dbo.cactis WHERE cactiName = ?");
        $stmt->execute([$name]);
        while($row = $stmt->fetch()){
            $result = $row['tropicalName'];
        }
        if($result == null){
            $stmtCacti = $pdo->prepare("INSERT INTO dbo.cactis (cactiName,cactiDescription,cactiQuantity,cactiPrice) VALUES (?,?,?,?)");
            $stmtCacti->execute([$name,$description,$quantity,$price]);
            $_SESSION['added'] = true;
            $_SESSION['exists'] = false;
            header("Location: ../add.php");
        } else {
            $_SESSION['exists'] = true;
            $_SESSION['added'] = false;
            ?>
            <script type="text/javascript">
            window.location.href = "../add.php";
            </script>
            <?php
        }
    }
    if($category == "outdoors") {
        $stmt = $pdo->prepare("SELECT outdoorName FROM dbo.outdoors WHERE outdoorName = ?");
        $stmt->execute([$name]);
        while($row = $stmt->fetch()){
            $result = $row['tropicalName'];
        }
        if($result == null){
            $stmtOutdoors = $pdo->prepare("INSERT INTO dbo.outdoors (outdoorName,outdoorDescription,outdoorQuantity,outdoorPrice) VALUES (?,?,?,?)");
            $stmtOutdoors->execute([$name,$description,$quantity,$price]);
            $_SESSION['added'] = true;
            $_SESSION['exists'] = false;
            header("Location: ../add.php");
        } else {
            $_SESSION['exists'] = true;
            $_SESSION['added'] = false;
            ?>
            <script type="text/javascript">
            window.location.href = "../add.php";
            </script>
            <?php
        }
    }
    if($category == "aquatics") {
        $stmt = $pdo->prepare("SELECT aquaticName FROM dbo.aquatics WHERE aquaticName = ?");
        $stmt->execute([$name]);
        while($row = $stmt->fetch()){
            $result = $row['aquaticName'];
        }
        if($result == null){
            $stmtOutdoors = $pdo->prepare("INSERT INTO dbo.aquatics (aquaticName,aquaticDescription,aquaticQuantity,aquaticPrice) VALUES (?,?,?,?)");
            $stmtOutdoors->execute([$name,$description,$quantity,$price]);
            $_SESSION['added'] = true;
            $_SESSION['exists'] = false;
            header("Location: ../add.php");
        } else {
            $_SESSION['exists'] = true;
            $_SESSION['added'] = false;
            ?>
            <script type="text/javascript">
            window.location.href = "../add.php";
            </script>
            <?php
        }
    }
}

?>

