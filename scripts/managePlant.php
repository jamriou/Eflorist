<?php
session_start();

if($_SESSION['isAdmin'] == false) {
    header("Location: ..//index.php");
    }
#includes a PDO setup
include "./..//database_connection//connection_info.php";
include "./..//database_connection//pdo_connect.php";
include "..//locales/manage_locales.php";
#Set up PDO for SQL injection protection

try {
$pdo = new PDO($dsn, $connectionId, $connectionPasswd, $options);
 } catch (Exception $e) {
   exit($e);
 }
#catches user/password submitted by html form
$OGname = $_GET['name'];
$OGcategory = $_GET['category'];

$category = $_POST['category'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

echo $OGcategory;
echo $OGname;
echo $category ;
echo $quantity ;
echo $name ;
echo $description ;
echo $price ;

#checks if the html form is filled
if(empty($_POST['category']) || $_POST['quantity'] < 0 || empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price'])){
?>
<script type="text/javascript">
alert("<?= $fillAll[$_SESSION["language"]]?>");
//window.location.href = "../manage.php";
</script>
<?php
}else{
    if($OGcategory == "tropicals") {
        echo "OGcategory == tropicals";
        if($category == "tropicals") {
            echo "category == tropicals";
            $stmtUpdate = $pdo->prepare("UPDATE dbo.tropicals SET tropicalName = ?, tropicalDescription = ?, tropicalQuantity = ?, tropicalPrice = ? WHERE tropicalName = ?");
            $result = $stmtUpdate->execute([$name, $description, $quantity, $price, $OGname]);
            header("Location: ../tropicals.php?page=1");
        }else{
            echo "not a tropical";
            //delete from tropical
            $stmtDelete = $pdo->prepare("DELETE FROM dbo.tropicals WHERE tropicalName = ?");
            $result = $stmtDelete->execute([$OGname]);
            //add to new category
            if($category == "cacti") {
                echo "in cacti";
                $stmtTropical = $pdo->prepare("INSERT INTO dbo.cactis (cactiName,cactiDescription,cactiQuantity,cactiPrice) VALUES (?,?,?,?)");
                $stmtTropical->execute([$name,$description,$quantity,$price]);
                header("Location: ../cacti.php?page=1");
            }
            if($category == "outdoors") {
                echo "in outdoors";
                $stmtTropical = $pdo->prepare("INSERT INTO dbo.outdoors (outdoorName,outdoorDescription,outdoorQuantity,outdoorPrice) VALUES (?,?,?,?)");
                $stmtTropical->execute([$name,$description,$quantity,$price]);
                header("Location: ../outdoors.php?page=1");
            }
        }
    }
    if($OGcategory == "cacti") {
        echo "OGcategory == cacti";
        if($category == "cacti") {
            echo "category == cacti";
            $stmtUpdate = $pdo->prepare("UPDATE dbo.cactis SET cactiName = ?, cactiDescription = ?, cactiQuantity = ?, cactiPrice = ? WHERE cactiName = ?");
            $result = $stmtUpdate->execute([$name, $description, $quantity, $price, $OGname]);
            header("Location: ../cacti.php?page=1");
        }else{
            echo "not a cacti";
            //delete from cacti
            $stmtDelete = $pdo->prepare("DELETE FROM dbo.cactis WHERE cactiName = ?");
            $result = $stmtDelete->execute([$OGname]);
            //add to new category
            if($category == "tropicals") {
                echo "in tropicals";
                $stmtTropical = $pdo->prepare("INSERT INTO dbo.tropicals (tropicalName,tropicalDescription,tropicalQuantity,tropicalPrice) VALUES (?,?,?,?)");
                $stmtTropical->execute([$name,$description,$quantity,$price]);
                header("Location: ../tropicals.php?page=1");
            }
            if($category == "outdoors") {
                echo "in outdoors";
                $stmtTropical = $pdo->prepare("INSERT INTO dbo.outdoors (outdoorName,outdoorDescription,outdoorQuantity,outdoorPrice) VALUES (?,?,?,?)");
                $stmtTropical->execute([$name,$description,$quantity,$price]);
                header("Location: ../outdoors.php?page=1");
            }
        }
    }
    if($OGcategory == "outdoors") {
        echo "OGcategory == outdoors";
        if($category == "outdoors") {
            echo "category == outdoors";
            $stmtUpdate = $pdo->prepare("UPDATE dbo.outdoors SET outdoorName = ?, outdoorDescription = ?, outdoorQuantity = ?, outdoorPrice = ? WHERE outdoorName = ?");
            $result = $stmtUpdate->execute([$name, $description, $quantity, $price, $OGname]);
            header("Location: ../outdoors.php?page=1");
        }else{
            echo "not a outdoor";
            //delete from outdoor
            $stmtDelete = $pdo->prepare("DELETE FROM dbo.outdoors WHERE outdoorName = ?");
            $result = $stmtDelete->execute([$OGname]);
            //add to new category
            if($category == "cacti") {
                echo "in cacti";
                $stmtTropical = $pdo->prepare("INSERT INTO dbo.cactis (cactiName,cactiDescription,cactiQuantity,cactiPrice) VALUES (?,?,?,?)");
                $stmtTropical->execute([$name,$description,$quantity,$price]);
                header("Location: ../cacti.php?page=1");
            }
            if($category == "tropicals") {
                echo "in tropicals";
                $stmtTropical = $pdo->prepare("INSERT INTO dbo.tropicals (tropicalName,tropicalDescription,tropicalQuantity,tropicalPrice) VALUES (?,?,?,?)");
                $stmtTropical->execute([$name,$description,$quantity,$price]);
                header("Location: ../tropicals.php?page=1");
            }
        }
    }
}


?>

