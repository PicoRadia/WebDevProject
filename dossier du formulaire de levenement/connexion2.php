<?php
function connectformulaire_evenements(){
    $con = mysqli_connect ('localhost', 'root', '','formulaire_events' );  
    if($con){
       
    }else{
        die(mysqli_error($con));
    }
}
?>