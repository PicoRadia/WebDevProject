



<?php
    $conn =mysqli_connect("localhost", "root","","bd_event");
    if($conn->connect_error){
          die('Erreur : ' .$conn->connect_error);
    }
    echo "Connexion réussie\r\n";
    $reponse = mysqli_query($conn,"select * from tab_event;");
    $row=mysqli_fetch_assoc($reponse);
    $id=$row['id_event'];
    echo $id;
    $conn->query("insert into event_archiver select * from tab_event where id_event=".$id.";");
    ?>
