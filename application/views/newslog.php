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
      <a class="navbar-brand" href="<?php echo site_url('user') ?>"><img src="img/Dziing_logo_Temp.png" style="width: 35px; height: 35px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-center mr-auto">
          <li class="nav-item active menu-button-padding">
            <a class="nav-link" href="<?php echo site_url('user') ?>">Home <span class="sr-only">(current)</span></a>
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
            <a class="nav-link" href="<?php echo site_url('newslog') ?>">News</a>
          </li>
          <li class="nav-item menu-button-padding">
            <!--<a class="nav-link disabled" href="#">Disabled</a>-->
            <a class="nav-link" href="<?php echo site_url('supportlog') ?>">Support</a>
          </li>

          <div class="nav-item menu-button-padding button-search">
          <form>
            <!--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" focusable="false">
              <path d="M14 2A8 8 0 0 0 7.4 14.5L2.4 19.4a1.5 1.5 0 0 0 2.1 2.1L9.5 16.6A8 8 0 1 0 14 2Zm0 14.1A6.1 6.1 0 1 1 20.1 10 6.1 6.1 0 0 1 14 16.1Z"></path>
            </svg>-->
            <input type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>

          <li class="nav-item dropdown no-arrow sign-in">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                <img class="img-profile rounded-circle" width="22" height="22"
                src="<?php echo base_url('img/'.$_SESSION['photo']); ?>" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= site_url('profile') ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="<?= site_url('change') ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
      </div>
    </nav>

    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>News</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="Image/ps5 resize.png" alt="" class="img-fluid">
                <!--<div class="icon"><i class="ion-ios-speedometer-outline"></i></div>-->
              </div>
              <h2 class="title"><a href="#">The PS5 is coming</a></h2>
              <p>
                PS5 (or PlayStation 5) is the next-generation PlayStation, releasing in late 2020, after a long and incredible decade that saw Sony emerge as the clear winner in the home console wars in the eyes of many.
                <a href="#">Read More...</a>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="Image/xbox series x resize.png" alt="" class="img-fluid">
                <!--<div class="icon"><i class="ion-ios-list-outline"></i></div>-->
              </div>
              <h2 class="title"><a href="#">We now know more than ever about Xbox Series X</a></h2>
              <p>
                 Previously known by 'Xbox Project Scarlett', the Xbox Series X was officially revealed at The Game Awards 2019 with a trailer that showed off the next Xbox in all its glory.
                <a href="#">Read More...</a>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="Image/Key_Visual_(Hajimari).jpg" alt="" class="img-fluid">
                <!--<div class="icon"><i class="ion-ios-eye-outline"></i></div>-->
              </div>
              <h2 class="title"><a href="#">The Legend of Heroes: Hajimari no Kiseki, coming to Japan in Summer 2020</a></h2>
              <p>
                Nihon Falcom revealed The Legend of Heroes: Hajimari no Kiseki, a brand-new game in their long-running flagship RPG...
                <a href="#">Read More...</a>
              </p>
            </div>
          </div>

        </div>

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

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= site_url('login/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">??</span>
        </button>
      </div>
      <div class="modal-body">Unsaved Changes will be lost.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>
</html>