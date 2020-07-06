<!DOCTYPE html>
<html>
<head>
	<title>page1</title>
</head>
<body>
	
    
    <?php
        $conn =mysqli_connect("localhost", "root","","bd_event");
        if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo "Connexion réussie\r\n";
            $reponse = mysqli_query($conn,"select * from tab_event;");
            $row=mysqli_fetch_assoc($reponse);
            echo "<br>";
            echo "\n".$row['description'];
    ?>
    
    <form name="archiver" method="post">
     	     <input type=button onclick=window.location.href='a2.php'; value=ARCHIVER/>
    
    </form>
    
           

</body>
</html>