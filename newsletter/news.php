<?php
      if (isset($_POST['submit']) ){
        $db_username = 'root';
        $db_password = '';
        $db_name     = 'evenement';
        $db_host     = 'localhost:3307';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
               or die('could not connect to database');
        //$nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom'])); 
        $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
        //$date = mysqli_real_escape_string($db,htmlspecialchars($_POST['date'])); 
        

          if($email!==""   ){
              
                $insertion ="INSERT INTO visiteur(email) VALUES('$email')";
                     
                $exec_requete = mysqli_query($db,$insertion);
                //$reponse      = mysqli_fetch_array($exec_requete);
                header('Location: confirmation.php');
                       
               
             
              
              

          }
          else  {
            header('Location: form.php?erreur=1');
                   
         }
      }
      
                ?>