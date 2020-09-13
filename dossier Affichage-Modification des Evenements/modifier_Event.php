<?php
//ouberture de la base
$objePdo=new PDO('mysql:host=localhost;dbname=formulaire_events','root','');
// preparation de la requette 
$pdoStat =$objePdo->prepare('UPDATE evenement SET  Nom_de_lécole=:nomecole , Nom_de_lévenement=:nomevenement , date_de_lévenement=:dateE ,Description=:descr,Categorie=:cat , Thème=:th WHERE Id=:num LIMIT 1');
// liaison du parametre nommé
$pdoStat->bindValue(':num', $_POST['numEvent'], PDO::PARAM_INT);
$pdoStat->bindValue(':nomecole', $_POST['Nom_de_lécole'], PDO::PARAM_STR);
$pdoStat->bindValue(':nomevenement', $_POST['Nom_de_lévenement'], PDO::PARAM_STR);
$pdoStat->bindValue(':dateE', $_POST['date_de_lévenement'], PDO::PARAM_STR);
$pdoStat->bindValue(':descr', $_POST['Description'], PDO::PARAM_STR);
$pdoStat->bindValue(':cat', $_POST['Categorie'], PDO::PARAM_STR);
$pdoStat->bindValue(':th', $_POST['Thème'], PDO::PARAM_STR);
// execution de la requete
$executeIsOk = $pdoStat->execute();
if ($executeIsOk)
{
    $mssg='Evenement a ete mis à jour';

}
else{
    $mssg='echec de modification';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification</title>
</head>
<body>
<h1>résultat de modification </h1>
<p><?=$mssg?></p>
</body>
</html>