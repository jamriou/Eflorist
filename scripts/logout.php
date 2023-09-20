<?php 
session_start();
$language = $_SESSION['language'];
session_destroy();
session_start();
$_SESSION['language'] = $language;
$_SESSION['checkedOut'] = null;
$_SESSION['isAdmin'] = false;
?>
<script type="text/javascript">
window.location.href = "../index.php";
</script>