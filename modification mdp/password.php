
  <?php
  session_start();
  if (isset($_SESSION['email'])){
 
      if (isset($_POST['valider']) ){
        $db_username = 'root';
        $db_password = '';
        $db_name     = 'evenement';
        $db_host     = 'localhost:3307';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
               or die('could not connect to database');

      
        $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
        $password1 = mysqli_real_escape_string($db,htmlspecialchars($_POST['password1']));
        $repeatpassword = mysqli_real_escape_string($db,htmlspecialchars($_POST['repeatpassword1']));
        $email = mysqli_real_escape_string($db,htmlspecialchars($_SESSION['email']));
        

          if(  $password!=="" && $password1!=="" && $repeatpassword!==""  ){
              if ($password1==$repeatpassword){
                      $query = mysqli_query( $db,"SELECT *FROM utilisateur where  email = '".$email."' and mdp = '".$password."' ");
                      
          
                       $rows=mysqli_fetch_row($query);
                       if ($rows==0){
                        header('Location: modificationMDP.php?erreur=4');
                       }
                       else{
                           mysqli_query($db,"UPDATE utilisateur SET  mdp = '".$password1."'  where  email = '".$email."'" );
                           header('Location: bienvenue.php');
                       }

              }
              else
              header('Location: modificationMDP.php?erreur=2');
                  echo "<p style='color:red'> les deux password doivent être identiques</p>";
              

          }
          else  {
            header('Location: modificationMDP.php?erreur=1');
                   
                    echo "<script>alert(\"tous les champs doivent être remplis\")</script>";
         }
      }
    }
    else{
        header('Location: Login.php?erreur=3');
    }
    
               
               
  
                ?>
