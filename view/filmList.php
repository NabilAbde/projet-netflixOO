<?php require_once('controller/filmList.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de films</title>
</head>

<body>
    <?php include('view/inc/menu.php'); ?>
    <h1>Liste de films</h1>
    <div>
        <h2>Titre : <?php $oFilm->displayTitle(); ?></h2>
        <p>Date de sortie en salle : <?php $oFilm->displayYear(); ?></p>
        <p>Durée : <?php $oFilm->displayRuntimeMinutes(); ?></p>

    </div>

    <img src=<?php $oFilm->displayImage(); ?> alt="film star wars">

</body>

</html>