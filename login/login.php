
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet"  href="css1/style3.css" />
  
  <link href="img/icon.png" rel="shortcut icon"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/catégorie.css">
  <!-- Favicon -->
  <link href="img/icon.png" rel="shortcut icon"/>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900%7cRoboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">


  <!-- Stylesheets  -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/slicknav.min.css"/>
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/venobox/venobox.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  

    <!-- Main Stylesheets -->
    <link href="css/style.css" rel="stylesheet">
	
 
     <title>connexion</title>

    
</head>
<body>
    <header id="header">
        <div class="container">
    
          <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
            <a href="#intro" class="scrollto"><img src="img/logo2.png" alt="" title=""></a>
          </div>
    
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="#intro">Acceuil</a></li>
              <li><a href="#about">Actualité</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                 Evenement
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Catégorie</a>
                  <a class="dropdown-item" href="#">Link 2</a>
                  <a class="dropdown-item" href="#">Link 3</a>
                </div>
              </li>
              
              <li><a href="#schedule">Gallerie</a></li>
             
             
              <li><a href="#gallery">Contact</a></li>
              <li class="buy-tickets"><a href="login.php">Se connecter</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->
    <div class="limiter">
    
        <div class="container-login100">
          <div class="wrap-login100">
            <form   class="login100-form validate-form" method="POST" action="verif.php">
              <span class="login100-form-logo">
                <i class="zmdi zmdi-landscape"></i>
              </span>
    
              <span class="login100-form-title p-b-34 p-t-27">
                Log in
              </span>
    
              <div class="wrap-input100 validate-input" data-validate = "Enter email">
                <input class="input100" type="text" name="email" placeholder="email">
                <span class="focus-input100" > <i style='font-size:24px' class='fas'>&#xf0e0;</i> </span>
              </div>
    
              <div class="wrap-input100 validate-input" data-validate="Enter password">
                
                <input class="input100" type="password" name="password"  placeholder="Password">
                <span class="focus-input100" > <i style='font-size:24px' class='fas'>	&#xf09c;</i> </span>

              
                
              </div>
    
              <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">
                  Remember me
                </label>
              </div>
              <?php
               if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1){ 
              echo "<p style='color:red'>email ou mot de passe incorrecte</p>";
                      }
                      else{
                        echo "<p style='color:red'> veuiller remplir tout les champs</p>";
                        

                      }

                }
                ?>
              
    
              <div class="container-login100-form-btn">
                <input type="submit"  name="login" value="Login"class="login100-form-btn">
                  
              </div>
              
              
            </form>
          </div>
        </div>
      </div>
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-info">
                <img src="img/logo2.png" alt="TheEvenet">
                <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
    
                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
    
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer><!-- #footer -->
    
      <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!-- Footer Section end -->
    
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>
  
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
