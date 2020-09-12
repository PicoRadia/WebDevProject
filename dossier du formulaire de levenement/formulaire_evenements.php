<?php
include("connexion2.php");
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Formulaire des évenements </title>
        <link rel="stylesheet"   href="style_formulaire_event.css"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
        <!-- toast -->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    </head>
    <body>
<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" > -->
<link href="../toastr.css" rel="stylesheet">

<!-- Bootstrap toastjs File -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" > -->
<script src="../toastr.js" defer></script>

<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/venobox/venobox.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    </head>
    <body>
<!--==========================
    Header
  ============================-->
  <div class="row">
    <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="logo enimEvent.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
      <ul class="nav-menu">
          <li><a href="#intro">Acceuil</a></li>
          
          <li><a href="#schedule">Actualité</a></li>
          <li ><a href="#hotels">Evénement</a>
            <ul class="sub-menu">
              <li><a href="Catégorie.html">Catégorie</a></li>
              <li><a href="file:///C:/Users/Pc/Downloads/Enim%20Event/speaker-details.html#schedulel">Speakers</a></li>
            </ul>
          </li>
           
          <li><a href="#gallery">Gallerie</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">se connecter</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
    <br>
  <br>
  </header>
  </div><!-- #header -->
 
  <!--==========================
    Formulaire :partie Frontend
  ============================-->
   <!--Insertion des informations du créateur d'événement  -->
  <div class="row">
  <div class="box">   
    <form  method="post" action="formulaire_evenements.php" enctype="multipart/form-data">
          
            <h2>Créez votre évenement </h1>
            <div class="inputbox"> 
              <input type="text" placeholder="Nom de l'école "  name="Nom_de_lécole" required/> <br/>
            </div>
            <div class="inputbox">
              <input type="text" placeholder="Nom de l'événement" name="Nom_de_lévenement" required /> <br/>
            </div>
            

            <div class="inputbox">
              <input type="date" placeholder="date de l'evenement" name="date_de_lévenement" required/> <br/>
            </div>
            
            <div class=for_categorie>
            <label >Thème:</label><br>    
             <select name="Thème">
                <option >Culturelle</option>
                <option >Scientifique</option>
                <option >Pédagogique</option>
                <option >Sportif</option>
                </select>
            
           
            <div class="inputbox">
             <input id="Description"  placeholder="Déscription" name="Description"  rows="3" cols="20" required></input><br/>
            </div>
            <div class=for_Theme>
            <br> <label >Catégorie:</label><br>    
             <select name="Categorie">
                <option >Forum</option>
                <option >Journée</option>
                <option >Conférence</option>
                <option >Formation</option>
                <option >Séminaire</option>
                <option >Workshop</option>
                <option >Open doors</option>
                <option >Compétion</option>
                <option >Hackathon</option>
           </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <!--Insertion  d'une image -->    
           <input type="file" name="img" required="required"/>
           <br><br>
           
           </div>
           
           <div class="bouton_valider">
           
           <input type="submit" name="valider" value="valider" class="btn btn-block btn_vali" />
          
           </div>
           <!--fin insertion -->  
        </form>
 </div>
 </div>
 <!-- # FINFormulaire -->
   <!--==========================
    Formulaire :partie backend
  ============================-->
 
        <?php
        
          
          

            //On récupère les valeurs entrées par l'utilisateur :
            $Nom_de_lécole=$_POST['Nom_de_lécole'];
            $Nom_de_lévenement=$_POST['Nom_de_lévenement'];
            $date_de_lévenement=$_POST['date_de_lévenement'];
            $Thème=$_POST['Thème'];
            $Description=$_POST['Description'];
            $Categorie=$_POST['Categorie'];
            //$image=$_POST['flyer_src'];
            
            //on ouvre la connexion 

            $con = mysqli_connect ('localhost', 'root', '','formulaire_events' );
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // le code d'insertion d'une image dans la bd 

            $coverpic="";
            if(isset($_FILES['img']))
            {
              
           
            $imgFile = $_FILES['img']['name'];
            $tmp_dir = $_FILES['img']['tmp_name'];
            $imgSize = $_FILES['img']['size']; 
            
            if(!empty($imgFile))
            {
           
            $upload_dir = '../image/'; // upload directory
            
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            
            // valid image extensions
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            
            // rename uploading image
            $coverpic = rand(1000,1000000).".".$imgExt;
            
            // allow valid image file formats
            if(in_array($imgExt, $valid_extensions)){ 
            // Check file size '5MB'
            if($imgSize < 5000000) {
            move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
            }
          
            }
         
             //On prépare la commande sql d'insertion
              $sql = 'INSERT INTO evenement VALUES(NULL,"'.$Nom_de_lécole.'","'.$Nom_de_lévenement.'","'.$Description.'","'.$Categorie.'","'.$coverpic.'","'.$date_de_lévenement.'","'. $Thème.'")'; 
            /*on lance la commande (mysqli_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
            if(mysqli_query($con, $sql))
            {
            
            echo "<script type='text/javascript'>toastr.success(' Posted succesfully')</script>";
            }
            else
            {
            echo "<script type='text/javascript'>toastr.danger(' Posted succesfully');</script>";
            }
            }
           }
            
            // on ferme la connexion
            mysqli_close($con);
        
        ?>
      </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  
  <!-- Contact Form JavaScript File -->
  

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>