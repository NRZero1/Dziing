<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo SITE_NAME; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/code.css">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-padding">
      <a class="navbar-brand" href="<?php echo site_url('login') ?>"><img src="img/Dziing_logo_Temp.png" style="width: 35px; height: 35px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-center mr-auto">
          <li class="nav-item active menu-button-padding">
            <a class="nav-link" href="<?php echo site_url('login') ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown menu-button-padding">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Games
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li class="dropdown-header" href="#">By Genre</li>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Strategy</a>
              <div class="dropdown-divider"></div>
              <li class="dropdown-header" href="#">By Price</li>
              <a class="dropdown-item" href="#">Price < Rp.50.000,00</a>
            </ul>
          </li>
          <li class="nav-item menu-button-padding">
            <a class="nav-link" href="<?php echo site_url('news') ?>">News</a>
          </li>
          <li class="nav-item menu-button-padding">
            <!--<a class="nav-link disabled" href="#">Disabled</a>-->
            <a class="nav-link" href="<?php echo site_url('support') ?>">Support</a>
          </li>

          <div class="nav-item menu-button-padding button-search">
          <form>
            <!--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" focusable="false">
              <path d="M14 2A8 8 0 0 0 7.4 14.5L2.4 19.4a1.5 1.5 0 0 0 2.1 2.1L9.5 16.6A8 8 0 1 0 14 2Zm0 14.1A6.1 6.1 0 1 1 20.1 10 6.1 6.1 0 0 1 14 16.1Z"></path>
            </svg>-->
            <input type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>

          <li class="nav-item dropdown menu-button-padding sign-in">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign in
          </a>
          <div class="dropdown-menu dropdown-menu-right"> 
              <form class="px-4 py-3" action="<?= site_url('login') ?>" method="post">
                <div class="form-group">
                    <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" value="<?php if(isset($_COOKIE['loginUsername'])) { echo $_COOKIE['loginUsername']; } ?>" required autofocus>
                    <label for="inputUsername">Username</label>
                </div>

                <div class="form-group">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" value="<?php if(isset($_COOKIE['loginPass'])) { echo $_COOKIE['loginPass']; } ?>" required>
                    <label for="inputPassword">Password</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" name="remember" <?php if(isset($_COOKIE["loginUsername"])) { ?> checked="checked" <?php } ?> class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">Remember password</label>
                  </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
              
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo site_url('sign_up') ?>">New around here? Sign up</a>
          </div>
        </div>
        </ul>
      </div>
    </nav>

		<section id="portfolio" class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Dziing Support</h3>
          <h4>	What do you need help with?</h4>
        </header>
        <br>
        <div class="btn-group dropright">
  			<button class="btn btn-secondary btn-lg dropdown-toggle block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			Games, Software, etc.
  			</button>
  		</div>
  		<br><br><br>
  		<div class="btn-group dropright">
  			<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			Purchases
  			</button>
  		</div>
  		<br><br><br>
  		<div class="btn-group dropright">
  			<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			My Account
  			</button>
  		</div>
  		<br><br><br>
  		<div class="btn-group dropright">
  			<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			Trading, Gifting, Items
  			</button>
  		</div>
        </section>

        <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Dziing</h3>
            <p></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Lodan Raya No.12 <br>
              Ancol, Kec. Pademangan, Kota Jkt Utara,<br>
              Daerah Khusus Ibukota Jakarta 14430<br>
              <strong>Phone:</strong> +62 822-6039-4746<br>
              <strong>Email:</strong> ronaldo.pangestu@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Dziing</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="#">Daniel Ronaldo Pangestu</a>
      </div>
    </div>
  </footer>
  </body>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</html>