
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