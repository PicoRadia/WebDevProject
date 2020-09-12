<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Enim Event</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


  <!-- Favicons -->
  <link href="img/logo/icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo/biglogo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="Acceuil.html">Acceuil</a></li>
          <li><a href="actualite.html">Actualité</a></li>
          <li class="menu-active"><a href="event.html">Évènements</a>
            <ul class="sub-menu">
              <li><a href="Categorie.html">Catégorie</a></li>
              <li><a href="speakers.html">Speakers</a></li>
            </ul>
          </li>
          <li><a href="#venue">Gallerie</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Se connecter</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

<!--==========================
   Event's Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
        <div class="container wow fadeInUp">
          <div class="section-header">  <!-- une barre de recherche des evenments -->
            <h2>Chercher un événement</h2>
            <section class="hero-section ">
              <div class="container ">
                <div class="hero-warp">
                  <form action="filter.php" method="post">
                    <div class="search-type">
                      <div class="st-item">
                        <input type="radio" name="st" id="titre" checked> 
                        <label for="titre">Titre</label>
                      </div>
                      <div class="st-item">
                        <input type="radio" name="st" id="Auteur">
                        <label for="Auteur">Institution</label>
                      </div>
                      <div class="st-item">
                        <input type="radio" name="st" id="tendance">
                      <label for="tendance">tendance </label>
                      </div>
                      <div class="st-item">
                        <input type="radio" name="st" id="nouveaute"> 
                      <label for="nouveaute">Thème</label>
                      </div>
                      <div class="st-item">
                        <input type="radio" name="st" id="categorie"> 
                      <label for="categorie">Catégorie</label>
                      </div>                                                           
                    </div>
                    <div class="search-input">
                      <input type="text" name="valueToSearch" placeholder="chercher par noms">
                      <button name="search" class="site-btn">Chercher</button>
                    </div>
                    <p>"Good fortune is what happens when opportunity meets with planning."Thomas Edison </p>
                    
                  </form>
                </div>
              </div>
            </section>
            <div class="row schedule-item" >
            <?php
            $con = new PDO("mysql:host=localhost;dbname=test",'root','');
            if (isset($_POST["search"])) {
                $str = $_POST["valueToSearch"];
                $sth = $con->prepare("SELECT * FROM `event` WHERE  titre = '$str'");

                $sth->setFetchMode(PDO:: FETCH_OBJ);
                $sth -> execute();

                if($row = $sth->fetch())
                {
                    ?>
                    <br><br><br>
                    <table>
                    <div style="overflow-x:auto;">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Titre</th>
                            <th>Institution</th>
                            <th>Thème</th>
                            <th>Catégorie</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $row->titre; ?></td>
                            <td><?php echo $row->institution; ?></td>
                            <td><?php echo $row->theme; ?></td>
                            <td><?php echo $row->categorie;?></td>
                        </tr>
                            </div>
                            </div>
                        

                    </table>
            <?php 
                }
                else{
                    echo "Evènement introuvable";
                }
            }
        ?>
 <?php
/*if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `event` WHERE CONCAT(`id`, `titre`, `theme`, `institution`,`tendance`,`categorie`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `event`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}*/

?>


</div>
<!-- Hero Section end -->
 <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo/biglogo.png" alt="EnimEvent">
            <p>EnimEvent vous facilte la vie. Ici vous trouvez tout les évènements en un seul click.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="acceuil.html">Acceuil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Apropos</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Evènements</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Catégorie</a></li>
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
              Ahmed Cherkaoui <br>
              Agdal-Rabat<br>
              Maroc <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> EnimEvent@gmail.com<br>
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
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>   <!-- the footer and the header are made by bootstrap but the body is from our own design -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>



  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="print.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
