<?php require_once('controller/filmList.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste de films</title>
</head>

<body>
    <?php include('view/inc/menu.php'); ?>
    <h1>Liste de films</h1>
    <div>
        <p>Pour ajouter des films , des acteurs des auteurs, veuillez renseigner les champs ci dessous : </p>
        <form action="index.php" method="post">
            
            <p><input type="hidden" name="action" value="filmList" /></p>
            <p>
                <label for="title">Titre du film : </label>
                <input type="text" name="title" />
            </p>
            <p>
                <label for="startyear">Annee de sortie : </label>
                <input type="number" name="startyear" />
            </p>
            <p>
                <label for="runtimeMinutes">Durée du film : </label>
                <input type="number" name="runtimeMinutes" />
            </p>

            <p>
                <label for="imageFilm">lien de l affiche du film : </label>
                <input type="text" name="imageFilm" />
            </p>
            <p>
                <input type="submit" name="send" value="Envoyer" />
            </p>

        </form>
    </div>
    <div>
        <h2>Titre : <?php $oFilm->displayTitle(); ?></h2>
        <p>Date de sortie en salle : <?php $oFilm->displayYear(); ?></p>
        <p>Durée : <?php $oFilm->displayRuntimeMinutes(); ?></p>

    </div>

    <img class="affiche" src=<?php $oFilm->displayImage(); ?> alt="film star wars">

</body>

</html>