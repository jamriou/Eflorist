<?php 
session_start();
if($_SESSION["language"] == "en")
    $_SESSION["language"] = "fr";
else $_SESSION["language"] = "en";
?>
<script>
if(document.referrer.includes("ajoutVideoUtilisateur")){
    url = document.referrer.replace(/[?].+/g," ");
    window.location.href = url;
}
else if(document.referrer.includes("tutoriels")){
    url = document.referrer.replace(/[?].+/g,"?page=1");
    window.location.href = url;
}
else{
    window.location.href = document.referrer;
}
</script>