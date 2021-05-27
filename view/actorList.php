<?php require_once('controller/actorList.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des acteurs</title>
</head>

<body>
    <?php include('view/inc/menu.php'); ?>
    <h1>Liste des acteurs</h1>
    <div>
        <h2>Nom <?php $oActeur->displayLastname(); ?></h2>
        <p>Prenom <?php $oActeur->displayFirstname(); ?></p>
        <p>Date de naissance <?php $oActeur->displayBirthday(); ?></p>
    </div>
    <img src=<?php $oActeur->displayImage(); ?> alt="Mark Hamill">
</body>

</html>