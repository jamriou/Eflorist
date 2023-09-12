<?php
/*session_start();*/
  include "./locales/footer_locales.php";
?>
<div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>eFlorist</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <?php
            if($_SESSION['language'] == "en"){?>
                <a class="title" href="scripts/language.php" >Fr - Français<a>
                <img src="img/francais.jpg" width="20" height="20"></img>
            <?php }
            if($_SESSION['language'] == "fr"){?>
                <a class="title" href="scripts/language.php" >En - English<a>
                <img src="img/english.jpg" width="20" height="20"></img>
            <?php } ?>
      </div>
    </div>