<?php
/*session_start();*/
  include "./locales/footer_locales.php";
?>
<!-- FOOTER -->
<div class="container">
    <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
            <h5 class="h1"><strong><span>eFlorist</span></strong></h5>
            <?php
                if($_SESSION['language'] == "en"){?>
                    <p class="small text-muted"><?=$allPersonsFictitiousDisclaimer[$_SESSION['language']]?></p>
            <?php }
                if($_SESSION['language'] == "fr"){?>
                <p class="small text-muted"><?=$allPersonsFictitiousDisclaimer[$_SESSION['language']]?></p>
            <?php } ?>
            <!--<p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>-->
        </div>
        <div class="col-lg-2 col-6 footer-links" style="text-align: center;">
            <h5 class="mb-3"><strong><span><?=$quickLinks[$_SESSION['language']]?></span></strong></h5>
            <ul class="list-unstyled text-muted">
                <li><a href="index.php"><?=$home[$_SESSION['language']]?></a></li>
                <li><a href="contactUs.php"><?=$contactUs[$_SESSION['language']]?></a></li>
                <li><a href="cart.php"><?=$cart[$_SESSION['language']]?></a></li>
                <li>
                    <?php
                    if($_SESSION['language'] == "en"){?>
                        <a href="scripts/language.php" >Francais</a>
                    <?php }
                    if($_SESSION['language'] == "fr"){?>
                        <a href="scripts/language.php" >English</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
        <div class="col-lg-2 col-6 footer-links footer-top">
            <h5 class="mb-3"><strong><span><?=$socials[$_SESSION['language']]?></span></strong></h5>
            <ul class="list-unstyled text-muted">
            <li>
                <div class="social-links">
                <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/james-l-164466250" target="_blank" rel="noreferrer noopener" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h5 class="mb-3"><strong><span><?=$newsletter[$_SESSION['language']]?></span></strong></h5>
            <p class="small text-muted"><?=$newsletterText[$_SESSION['language']]?></p>   
            <!--<form action="#">
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>-->
        </div>
        
    </div>
</div>