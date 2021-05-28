<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <h1>Formulaire </h1>
    <p>Pour ajouter des films , des acteurs des auteurs, veuillez renseigner les champs ci dessous : </p>
    <form action="vforms.php" method="post">
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
</body>

</html>