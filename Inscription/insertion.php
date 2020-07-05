
  <?php
      if (isset($_POST['submit']) ){
        $db_username = 'root';
        $db_password = '';
        $db_name     = 'evenement';
        $db_host     = 'localhost:3307';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
               or die('could not connect to database');
        $nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom'])); 
        $prenom = mysqli_real_escape_string($db,htmlspecialchars($_POST['prenom'])); 
        $phone = mysqli_real_escape_string($db,htmlspecialchars($_POST['phone'])); 
        $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
        $repeatpassword = mysqli_real_escape_string($db,htmlspecialchars($_POST['repeatpassword']));
        $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email']));
        $ecole = mysqli_real_escape_string($db,htmlspecialchars($_POST['ecole'])); 

          if($email!=="" && $password!=="" && $repeatpassword!=="" && $nom!=="" && $prenom!=="" && $phone!=="" && $ecole!=="" ){
              if ($password==$repeatpassword){
                
                $insertion ="INSERT INTO utilisateur(email,mdp,nom,prenom,phone,ecole) VALUES('$email','$password','$nom','$prenom','$phone','$ecole')";
                     
                $exec_requete = mysqli_query($db,$insertion);
                
                header('Location: Inscription.php?erreur=0');
                echo "<p style='color:red'> les données sont ajoutées avec succès </p>";
                
              }
              else
              header('Location: Inscription.php?erreur=2');
                  echo "<p style='color:red'> les deux password doivent être identiques</p>";
              
          }
          else  {
            header('Location: Inscription.php?erreur=1');
                    
                    echo "<script>alert(\"tous les champs doivent être remplis\")</script>";
         }
      }
                ?>

