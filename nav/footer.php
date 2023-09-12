<?php
/*session_start();*/
  include "./locales/footer_locales.php";
?>
<div class="container footer-bottom clearfix">
      <div class="copyright">
      <?php
            if($_SESSION['language'] == "en"){?>
                <strong><span>eFlorist</span></strong>. All names, locations, and checkouts in this production are fictitious. No identification with actual places and products is intended or should be inferred.
            <?php }
            if($_SESSION['language'] == "fr"){?>
                <strong><span>eFlorist</span></strong>. Tous les noms, lieux et caisses de cette production sont fictifs. Aucune identification avec des lieux et des produits réels n’est prévue ou ne devrait être déduite.
            <?php } ?>
      <div class="credits">
        <?php
            if($_SESSION['language'] == "en"){?>
                <a class="title" href="scripts/language.php" >Fr<a>
                <img src="img/francais.jpg" width="20" height="20"></img>
            <?php }
            if($_SESSION['language'] == "fr"){?>
                <a class="title" href="scripts/language.php" >En<a>
                <img src="img/english.jpg" width="20" height="20"></img>
            <?php } ?>
      </div>
    </div>