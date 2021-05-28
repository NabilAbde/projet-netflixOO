
 <?php // toujours commenter pour les bonnes pratiques
    /**
     * Film
     *@author Nabil
     */

    class Film
    { // Définition de nos proprietes
        //avec des valeurs par defaut
        public $title = "Star Wars";
        public $startYear = 1977;
        public $runtimeMinutes = 222;
        public $imageFilm = "https://fr.shopping.rakuten.com/photo/1447890469.jpg";


        /**
         * Method __construct
         *
         * @param string $title correspond au titre original du film
         * @param int $startYear annee de sortie du film
         * @param int $runtimeMinutes duree en minutes du film
         * @param string $imageFilm affiche l affiche du film via un lien
         *
         * @return void
         */
        public function __construct(string $title, int $startYear, int $runtimeMinutes, string $imageFilm)
        {
            $this->title = $title;
            $this->startyear = $startYear;
            $this->runtimeMinutes = $runtimeMinutes;
            $this->imageFilm = $imageFilm;
        }
        /**
         * Method displayTitle qui affiche le titre du film
         *
         * @return void
         */
        public function displayTitle()
        {
            echo $this->title;
        }
        public function displayYear()
        {
            echo $this->startYear;
        }

        public function displayRuntimeMinutes()
        {/*on cherche la duree en heure minute avec la fonction strftime 
            qui necessite format (%H et%m , et timestarp toujours en seconde)*/
            echo strftime("La durée du film est de %H Heures et %M minutes", $this->runtimeMinutes * 60);
        }
        public function displayImage()
        {
            echo $this->imageFilm;
        }
    }
    ?>