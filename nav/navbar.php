<?php
/*session_start();*/
  include "./locales/navbar_locales.php";
  ?>

<h1 class="logo mr-auto"><a href="index.php">eFlorist</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php"><?=$home[$_SESSION['language']]?></a></li>
          <li><a href="tropicals.php?page=1"><?=$tropicals[$_SESSION['language']]?></a></li>
          <li><a href="cacti.php?page=1"><?=$cacti[$_SESSION['language']]?></a></li>
          <li><a href="outdoors.php?page=1"><?=$outdoors[$_SESSION['language']]?></a></li>
          <?php 
          if($_SESSION['isAdmin']){?>
          <li><a href="add.php"><?=$add[$_SESSION['language']]?></a></li>
          <?php }
          if(isset($_SESSION['authenticated'])) {?>
          <li><a href="#"><?=$welcome[$_SESSION['language']]?>, <?=$_SESSION['first']?>!</a></li>
          <?php } ?>
          <li class="active">
            <a href="cart.php"><?=$cart[$_SESSION['language']]?></a>
            <!-- <img src="img/cart.png" width="20" height="20"> -->

          </li>
          <li>

          </li>
        </ul>
      </nav><!-- .nav-menu -->
      <?php 
      if(!isset($_SESSION['authenticated'])) {?>
      <a href="login.php" class="login-btn scrollto"><?=$login[$_SESSION['language']]?></a>
      <?php }
      if(isset($_SESSION['authenticated'])) {?>
      <a href="scripts/logout.php" class="login-btn scrollto"><?=$logout[$_SESSION['language']]?></a>
      <?php } ?>