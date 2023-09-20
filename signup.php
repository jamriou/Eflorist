<?php 
session_start();

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "fr";
}

include "locales/signup_locales.php";

?>

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>eFlorist - <?=$signup[$_SESSION['language']]?></title>
   <link href="img/favicon.ico" rel="icon">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <meta http-equiv="Content-Security-Policy" 
      content="script-src 'self' https://apis.google.com">

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->

   <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

      <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">
  <link href="css/LoginSignupCSS.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			      <div class="myform form ">
                  <div class="logo mb-3">
                     <div class="col-md-12 text-center">
                        <h1 ><?=$signup[$_SESSION['language']]?></h1>
                     </div>
                  </div>
                  <form action="scripts/signup.php" method="post" name="registration">
                     <div class="form-group">
                        <label for="exampleInputEmail1"><?=$first[$_SESSION['language']]?></label>
                        <input type="text"  name="first" class="form-control" id="first" aria-describedby="emailHelp" placeholder="<?=$firstPH[$_SESSION['language']]?>">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1"><?=$last[$_SESSION['language']]?></label>
                        <input type="text"  name="last" class="form-control" id="last" aria-describedby="emailHelp" placeholder="<?=$lastPH[$_SESSION['language']]?>">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1"><?=$email[$_SESSION['language']]?></label>
                        <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="<?=$emailPH[$_SESSION['language']]?>">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1"><?=$password[$_SESSION['language']]?></label>
                        <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="<?=$passwordPH[$_SESSION['language']]?>">
                     </div>
                     <div class="form-group">
                        <p class="text-center"><?=$accept[$_SESSION['language']]?> <a href="#"><?=$terms[$_SESSION['language']]?></a></p>
                     </div>
                     <div class="col-md-12 text-center mb-3">
                        <button type="submit" class=" btn btn-block login-btn btn-primary"><?=$submit[$_SESSION['language']]?></button>
                     </div>
                     <div class="col-md-12 ">
                        <div class="form-group">
                           <p class="text-center"><a href="login.php" id="signin"><?=$account[$_SESSION['language']]?></a></p>
                           <p class="text-center"><a href="index.php" id="signin"><?=$back[$_SESSION['language']]?></a></p>                        
                        </div>
                     </div>
                  </form>
               </div>
         </div>
      </div>   
         
</body>

<footer class="footer" id="footer">

   <?php include "nav/footer.php"; ?>

</footer><!-- End Footer -->