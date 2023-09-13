<?php
/*session_start();*/
include "./locales/navbar_locales.php";
if(!isset($_SESSION["isAdmin"])){
   $_SESSION["isAdmin"] = false;
}
if(!isset($_SESSION['authenticated'])){
  $_SESSION["isAdmin"] = false;
}
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <h1 class="navbar-brand logo" href="#">eFlorist</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="drop-down collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-menu">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php"><?=$home[$_SESSION['language']]?></a>
        </li>
        <li class="nav-item">
        <?php 
          if($_SESSION['isAdmin']){?>
          <li><a class="nav-link" href="add.php"><?=$add[$_SESSION['language']]?></a></li>
          <?php }
          if(isset($_SESSION['authenticated'])) {?>
          <li><a class="nav-link" href="#"><?=$welcome[$_SESSION['language']]?>, <?=$_SESSION['first']?>!</a></li>
          <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="tropicals.php?page=1"><?=$tropicals[$_SESSION['language']]?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cacti.php?page=1"><?=$cacti[$_SESSION['language']]?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="outdoors.php?page=1"><?=$outdoors[$_SESSION['language']]?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="cart.php"><?=$cart[$_SESSION['language']]?></a>
            <!-- <img src="img/cart.png" width="20" height="20"> -->
        </li>
      </ul>
      <?php 
        if(!isset($_SESSION['authenticated'])) {?>
        <a href="login.php" class="text-decoration-none login-btn"><?=$login[$_SESSION['language']]?></a>
        <?php }
        if(isset($_SESSION['authenticated'])) {?>
        <a href="scripts/logout.php" class="text-decoration-none login-btn"><?=$logout[$_SESSION['language']]?></a>
        <?php } ?>
    </div>
  </div>
</nav>

