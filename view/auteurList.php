<?php require_once('controller/autorList.php'); ?>
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
    <h1>Liste des auteurs</h1>
    <div>
        <h2>Nom <?php $oAuteur->displayLastname(); ?></h2>
        <p>Prenom <?php $oAuteur->displayFirstname(); ?></p>
        <p>Date de naissance <?php $oAuteur->displayBirthday(); ?></p>
    </div>
    <img src=<?php $oAuteur->displayImage(); ?> alt="George lucas">
</body>

</html>