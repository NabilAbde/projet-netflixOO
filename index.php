<?php



if (!empty($_GET)) :

    switch ($_GET['action']):
        case 'filmList':
            require_once('view/filmList.php');
            break;

        case 'actorList':
            require_once('view/actorList.php');
            break;

        case 'auteurList':
            require_once('view/auteurList.php');
            break;

        default:
            echo "La page que vous avez demandé n'existe pas";
            break;
    endswitch;

else :
    echo "vous n'avez pas le droit d'être ici";
endif;
