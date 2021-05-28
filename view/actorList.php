<?php require_once('controller/actorList.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste des acteurs</title>
</head>

<body>
    <?php include('view/inc/menu.php'); ?>
    <h1>Liste des acteurs</h1>
    <div>
        <h2>Nom <?php $oActeur->displayLastname(); ?></h2>
        <p>Prenom <?php $oActeur->displayFirstname(); ?></p>
        <p>Date de naissance <?php $oActeur->displayBirthday(); ?></p>
        <p>Date de décès <?php $oActeur->displayDeathday(); ?></p>
        <p>Age : <?php $oActeur->displayAge(); ?></p>
        <p> <?php $oActeur->displayMortouvivant(); ?></p>
    </div>
    <img class="affiche" src=<?php $oActeur->displayImage(); ?> alt="Mark Hamill">
</body>

</html>