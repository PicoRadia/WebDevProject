<?php
//ouberture de la base
$objePdo=new PDO('mysql:host=localhost;dbname=formulaire_events','root','');
// preparation de la requette 
$pdoStat =$objePdo->prepare('SELECT Id, Nom_de_lécole, Nom_de_lévenement ,Description,date_de_lévenement,Thème  FROM evenement');
// execution de la requette 
$executeIsOk = $pdoStat->execute();
//recuperation des resultats en une seule fois 
$res=$pdoStat->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>TheEvent </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="css/style1.css" rel="stylesheet">
</head>
</head>
<body>
    <h2> liste des événement: </h2>
    <ul>
        <?php foreach ($res as $re):?>
        
          <p>
        
           <?= $re['Nom_de_lécole'] ?> organise un événement sous le nom de :<?= "&nbsp&nbsp"?> <?= $re['Nom_de_lévenement'] ?> <br> <?= "&nbsp&nbsp"?> à l'heure: <?= $re['date_de_lévenement'] ?> sous le theme: <br> <?= "&nbsp&nbsp"?><?= $re['Thème'] ?> 
              
             <a onclick="return confirm('etes vous sure de vouloir modifier ')"href="form_modification_Event.php?numEvent=<?=$re['Id'] ?>" > modifier </a> 
          </p>
            
        <?php endforeach ?>
    </ul>
    </body>
</html