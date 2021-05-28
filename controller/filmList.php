<?php
// version temporaire pour tester notre methode
require_once('model/film.php');
require_once('model/auteur.php');
require_once('model/acteur.php');




if (!empty($_POST)) {
    $oFilm = new Film($_POST["title"], $_POST["startyear"], $_POST["runtimeMinutes"], $_POST["imageFilm"]);
} else {
    $oFilm = new Film("Star Wars", 1977, 215, "https://fr.shopping.rakuten.com/photo/1447890469.jpg");
}




/*appel par propriete :
echo $oFilm->title;
echo $oFilm->startYear;
echo $oFilm->runtimeMinutes;*/

/*Appel de la methode 
$oFilm->displayTitle();
$oFilm->displayYear();
$oFilm->displayRuntimeMinutes();
?>
<hr>
<?php
$oAuteur->displayLastname();
$oAuteur->displayFirstname();
$oAuteur->displayBirthday();
?>
<hr>
<?php
$oActeur->displayLastname();
$oActeur->displayFirstname();
$oActeur->displayBirthday();*/