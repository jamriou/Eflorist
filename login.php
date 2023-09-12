<?php 
session_start();

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "en";
}

include "./locales/login_locales.php";

?>

<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
}
</style>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>eFlorist - <?=$login[$_SESSION['language']]?></title>
    <link href="img/favicon.ico" rel="icon">

      <!-- Template Main CSS File -->
</head>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="css/LoginSignupCSS.css" rel="stylesheet">

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1><?=$login[$_SESSION['language']]?></h1>
						 </div>
					</div>
               <form action="scripts/login.php" method="post" name="login">
                     <div class="form-group">
                        <label for="exampleInputEmail1"><?=$email[$_SESSION['language']]?></label>
                        <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="<?=$emailPH[$_SESSION['language']]?>">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1"><?=$password[$_SESSION['language']]?></label>
                        <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="<?=$passwordPH[$_SESSION['language']]?>">
                     </div>
                     <div class="col-md-12 text-center ">
                        <button type="submit" class="btn btn-block login-btn btn-primary"><?=$login[$_SESSION['language']]?></button>
                     </div>
                     </form>
               <div class="col-md-12 ">
                  <div class="login-or">
                     <hr class="hr-or">
                     <span class="span-or"><?=$or[$_SESSION['language']]?></span>
                  </div>
               </div>
               <div class="form-group">
                  <p class="text-center"><?=$noAccount[$_SESSION['language']]?> <a href="signup.php" id="signup"><?=$signUp[$_SESSION['language']]?></a></p>
                  <p class="text-center"><a href="index.php" id="index"><?=$back[$_SESSION['language']]?> </a></p>
               </div>
				</div>
		</div>
   </div>   
         
</body>

<footer class="footer" id="footer">
   <?php include "nav/footer.php"; ?>
</footer><!-- End Footer -->