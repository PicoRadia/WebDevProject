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
            <?php
            $con = new PDO("mysql:host=localhost;dbname=test",'root','');
            if (isset($_POST["search"])) {
                $str = $_POST["valueToSearch"];
                $sth = $con->prepare("SELECT * FROM `event` WHERE titre = '$str'");

                $sth->setFetchMode(PDO:: FETCH_OBJ);
                $sth -> execute();

                if($row = $sth->fetch())
                {
                    ?>
                    <br><br><br>
                    <table>
                        <tr>
                            <th>titre</th>
                            <th>institution</th>
                            <th>theme</th>
                            <th>Categorie</th>
                        </tr>
                        <tr>
                            <td><?php echo $row->titre; ?></td>
                            <td><?php echo $row->institution; ?></td>
                            <td><?php echo $row->theme; ?></td>
                            <td><?php echo $row->categorie;?></td>
                        </tr>

                    </table>
            <?php 
                }
                else{
                    echo "Evènement introuvable";
                }
            }
        ?>
            <h2>Liste des événements</h2>
            <p>Evènements à ne pas rater</p>
          </div>
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Cette semaine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">La semaine prochaine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">La semaine suivante</a>
            </li>
          </ul>
          <h3 class="sub-heading">Ne rater pas les évènements de cette semaine</h3>
          <div class="tab-content row justify-content-center">
            <!-- Schdule week 1 -->
            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
              <div class="row schedule-item" id="printableArea">
                <div class="col-md-2">
                  <div class="col-lg-2 order-lg-1 order-2">
                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                      <div class="event_day">20</div>
                      <div class="event_month">Février</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-10 ">
                  <h4>Forum Mines Rabat Entreprises</h4>
                  <div class="main">   <!-- systeme d'evaluation des evenements -->
                    <i class="fa fa-star checked" id=”one”></i>
                    <i class="fa fa-star checked" id="two"></i>
                    <i class="fa fa-star checked" id="three"></i>
                    <i class="fa fa-star unchecked" id="four"></i>
                    <i class="fa fa-star unchecked" id="five"></i>
                  </div> 
                  <div class="event_image flotte">   <!-- La classe flotte permet d'alligner la foto et le theme a droite du texte descriptif -->
                    <label for="titre">Thème:<a href="#" class="theme badge-pedag">Pédagogique </a></label><br/>
                    <a href="img/events/forum.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/events/forum.jpg" alt=""></a>
                  </div>    
                  <label> Catégorie: Forum</label> 
                  <label> <a href="enim.gov.ma">Lieu: L'Ecole Nationale Supérieure des Mines de Rabat</a></label>  
                  <p>Mesdames et Messieurs,
                    Un 20ème anniversaire se doit d'être mémorable, nous nous sommes donc donnés la promesse d'ancrer cette édition dans toutes les mémoires.En effet, nous avons comme objectif, non seulement de subvenir aux besoins des lauréats et personnes recherchant un emploi, mais également de donner aux étudiants l'opportunité de décrocher un stage découverte, PFA, et surtout, un stage PFE.
                    Cela dit, nous vous donnons rendez-vous le 20 et 21 Février 2020, à l'Ecole Nationale Supérieure des Mines de Rabat, pour une édition sans précédent.
                  </p>
                  <br/>
                  <a href="javascript:void(0);" onclick="printPageArea('printableArea')" class="btn justify-content-center" >Télécharger le programme</a>
                </div>
              </div>
              <div class="row schedule-item" id="printArea">
                <div class="col-md-2">
                  <div class="col-lg-2 order-lg-1 order-2">
                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                      <div class="event_day">23</div>
                      <div class="event_month">Février</div>
                    </div>
                  </div>
                </div>
                  <div class="col-md-10">
                    <h4>Moroccan Robotic Challenge MRC 6.0</h4>
                    <div class="stars">
                      <i  class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                    </div> 
                    <div class="event_image flotte">
                      <label for="titre" class="labelclasse">Thème:<a href="#" class="theme badge-techn">Technologie</a></label>
                      <br/>
                      <a href="img/events/MRC6.png" class="venobox" data-gall="gallery-carousel"><img src="img/events/MRC6.png" alt=""></a>
                    </div> 
                    <label> Catégorie: Compétition</label> 
                    <label> <a href="enim.gov.ma">Lieu: L'Ecole Nationale Supérieure des Mines de Rabat</a></label>  
                    <p>Le club Mines Makers organise, sous la tutelle de l'association des élèves ingénieurs de l'école nationale supérieure des mines de Rabat (ENSMR), La 6ème édition de son évenement phare Moroccan Robotics Challenge.
                      Santé, Agriculture, Cité ! Trois exigences de la vie humaine qui ont révélées l’esprit des Makers pour annoncer un thème vague et intéressant pour la 6eme édition de leur évènement phare Moroccan Robotic Challenge. Le MRC 6.0 aura lieu le 29 mars à l’Ecole Nationale Supérieure des Mines de Rabat.
                      </p>
                      <br/>
                      <a href="javascript:void(0);" onclick="printPageArea('printArea')" class="btn justify-content-center" download>Télécharger le programme</a>
                  </div>
              </div>
              
            </div>
            <!-- End Schdule Day 1 -->
  
            <!-- Schdule Day 2 -->
            <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
              <div class="row schedule-item" id="2-1" >
                <div class="col-md-2">
                  <div class="col-lg-2 order-lg-1 order-2">
                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                      <div class="event_day">20</div>
                      <div class="event_month">Mars</div>
                    </div>
                  </div>
                </div>
                  <div class="col-md-10">
                    <h4>Semaine Culturelle</h4>
                    <div class="stars">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-starchecked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star unchecked"></i>
                    </div> 
                    <div class="event_image flotte">
                      <label for="titre" class="labelclasse">Thème:<a href="#" class="theme badge-Cult">Culturel</a></label>
                      <br/>
                      <a href="img/events/met.jpg" class="image fit thumb"><img src="img/events/met.jpg" /></a>  
                  </div>         
                    <label> Catégorie: Compétition</label> 
                    <label> <a href="enim.gov.ma">Lieu: L'Ecole Nationale Supérieure des Mines de Rabat</a></label>  
                    <p>La compétition du court métrage est un lieu de rencontre entre les jeunes scénaristes à l’imagination débordante. Leur créativité nous entraîne vers des univers dont seule la jeune création cinématographique a le secret. Laissez-vous aller, dépaysement assuré. Il il y aura aussi une projection et une discussion par des réalisateurs et cinéastes a propos du film "Capharnaüm" qu'est un film dramatique américano-franco-libanais écrit et réalisé par Nadine Labaki, sorti en 2018. Le film est en sélection officielle au Festival de Cannes 2018. Trois fois primé, il reçoit le prix du jury, le prix du jury œcuménique et le prix de la citoyenneté.</p> 
                      <br/>
                      <a href="javascript:void(0);" onclick="printPageArea('2-1')" class="btn justify-content-center"download>Télécharger le programme</a>
                  </div>
              </div>
  
              <div class="row schedule-item" id="2-2">
                <div class="col-md-2">
                  <div class="col-lg-2 order-lg-1 order-2">
                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                      <div class="event_day">23</div>
                      <div class="event_month">Mars</div>
                    </div>
                  </div>
                </div>
                  <div class="col-md-10">
                    <h4>Semaine Culturelle</h4>
                    <div class="stars">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star unchecked"></i>
                      <i class="fa fa-star unchecked"></i>
                    </div> 
                    <div class="event_image flotte">
                      <label for="titre" class="labelclasse">Thème:<a href="#" class="theme badge-Cult">Culturel</a></label>
                      <br/>
                      <a href="img/events/sem.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/events/sem.jpg" alt=""></a>
                  </div>         
                    <label> Catégorie: journée</label> 
                    <label> <a href="enim.gov.ma">Lieu: L'Ecole Nationale Supérieure des Mines de Rabat</a></label>  
                    <p>Le Comité Culturel, sous tutelle de l’Association des Élèves-Ingénieurs de l’Ecole Nationale de l’Industrie Minérale, organise cette année la 16ème édition de la semaine culturelle sous le thème “Culture d'hier et culture d'aujourd'hui“. Une occasion à ne pas rater pour assister à l'événement culturel le plus attendu par les passionnées de la culture, de l'art et de la littérature. Un programme riche et variée qui s'étale sur 4 journées; expositions de diverses cultures, des stands, shows, dégustations, dance, défilés, compétitions, salon du livre, théâtre ... et pleins d’autres surprises vous attendent dans une ambiance chaleureuse et conviviale.
                      📌Rendez-vous du 23 au 26 Mars. Entrée libre et gratuite .
                      Pour plus d'info : 📞0618717811
                      </p> 
                      <br/>
                      <a href="javascript:void(0);" onclick="printPageArea('2-2')" class="btn justify-content-center"download>Télécharger le programme</a>
                  </div>
              </div>
  
              <div class="row schedule-item">
                <div class="col-md-2">
                  <div class="col-lg-2 order-lg-1 order-2">
                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                      <div class="event_day">26</div>
                      <div class="event_month">Mars</div>
                    </div>
                  </div>
                </div>
                  <div class="col-md-10">
                    <h4>Cosmonight</h4>
                    <div class="stars">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div> 
                    <div class="event_image flotte">
                      <label for="titre" class="labelclasse">Thème:<a href="#" class="theme badge-Astro">Astronomie</a></label>
                      <br/>
                      <a href="img/events/cosmonight.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/events/cosmonight.jpg" alt=""></a>
                      <label>Animateur : <a href="spekers#" >Abdelhafid Bani</a><div class="speaker">
                        <img src="img/speakers/Abd.jpg" alt="Abdelhafid Bani">
                      </div></label>
                  </div>         
                    <label> Catégorie: Open Doors</label> 
                    <label> <a href="enim.gov.ma">Lieu: L'Ecole Nationale Supérieure des Mines de Rabat</a></label>  
                    <p>Astronomines، الهدف ديالها هو تبسيط العلوم. اللي غيكون مختلف على المحاضرات العادية هو انكم غتكونو قريبين من المحاضر وتقدو تسولوه بسهولة باش يكون الفهم أحسن. 
                      - هاد الجلسة غتكون فالمدرسة الوطنية للمعادن بالرباط فاكدال قدام محطة القطار
                      - هاد السبت 26 ماي مع 22:30 
                      - الأنشطة اللي غتكون: 
                      - غيكون حاضر فيها هاد المرة عبد الحفيظ باني رئيس جمعية الرباط لعلم الفلك 
                      - المفاجأة ديال هاد النسخة الأولى هي غتكون مراقبة للسماء عبر التلسكوب
                      </p>
                      <br/>
                      <a href="#" class="btn justify-content-center"download>Télécharger le programme</a>
                  </div>
              </div>
  
              
            </div>
            <!-- End Schdule Day 2 -->
  
            <!-- Schdule Day 3 -->
            <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
                <div class="row schedule-item">
                  <div class="col-md-2">
                    <div class="col-lg-2 order-lg-1 order-2">
                      <div class="event_date d-flex flex-column align-items-center justify-content-center">
                        <div class="event_day">24</div>
                        <div class="event_month">Avril</div>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-10">
                      <h4>Semaine Culturelle</h4>
                      <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div> 
                      <div class="event_image flotte">
                        <label for="titre" class="labelclasse">Thème:<a href="#" class="theme badge-Cult">Culturel</a></label>
                        <br/>
                        <a href="img/events/sem2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/events/sem2.jpg" alt=""></a>
                    </div>         
                      <label> Catégorie: journée</label> 
                      <label> <a href="enim.gov.ma">Lieu: L'Ecole Nationale Supérieure des Mines de Rabat</a></label>  
                      <p>Le comité culturel est de retour pour vous présenter le fruit d’un travail acharné de son comité organisateur tout au long de cette année . Chere audience , on vous invite tous à la 15ème édition de la semaine culturelle et on vous donne rendez vous à un événement assez spécial, plus amusant et purement marocain : La 2eme Edition du « جامع لفنا ف لينيم » , Quoi de mieux pour créer un atmosphère de bonheur issu de notre culture marocaine . Nous aurons ainsi le plaisir d’accueillir une panoplie de jeunes artisans des différents régions du Maroc pour exposer leurs créatures , des conteurs qui mêlent le geste à la parole pour enseigner, divertir et charmer le public . Des chants et danses et diverses expressions artistiques sont aussi au programme.
                        N’hésitez pas à venir découvrir notre version particulière de « Jamaa el fnaa v.2» à l’Enim , plusieurs surprises vous attendent. 
                        On vous donne rendez vous le 19 mars 2019 à l’Ecole nationale des mines de Rabat .
                        </p> 
                        <br/>
                        <a href="#" class="btn justify-content-center"download>Télécharger le programme</a>
                    </div>
                </div>
  
  
            </div>
            <!-- End Schdule Day 3 -->
           
          </div>
        </div>
  
      </section>
    <!-- Hero Section end -->

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
