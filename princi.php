<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            
              

           
            <?php
             echo "<a href='modificationMDP.php'> changer mot de passe</a> <br>";
             echo "<a href='login.php?deconnexion=true'> Déconnexion</a>";
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['email'] !== ""){
                    //$user = $_SESSION['nom'];
                    // afficher un message
                    echo "<br>Bonjour , vous êtes connectés";
                }
            ?>
            
            
        </div>
    </body>
</html>
