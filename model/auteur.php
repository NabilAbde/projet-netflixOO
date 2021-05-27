
 <?php // toujours commenter pour les bonnes pratiques
    /**
     * Auteur
     *@author Nabil
     */

    class Auteur
    { // Définition de nos proprietes
        //avec des valeurs par defaut
        public $lastname = "Lucas";
        public $firstname = "George";
        public $birthdate = "1944-05-14"; // attention date en anglais
        public $imageAutor ="https://fr.web.img6.acsta.net/pictures/15/12/18/10/51/568937.jpg";


        /**
         * Method displayLastname affiche le nom de l auteur
         *
         * @return void
         */
        public function displayLastname()
        {
            echo $this->lastname;
        }

        /**
         * Method displayFirstname affiche le prenom de l auteur
         *
         * @return void
         */
        public function displayFirstname()

        {
            echo $this->firstname;
        }

        /**
         * Method displayBirthday affiche la date de naissance de l auteur
         *
         * @return void
         */
        public function displayBirthday()
        { //1 onconvertit la date en timestamps
            $timestamp = strtotime($this->birthdate); // YYYY-MM-dd ==>TIMESTAMP
            //2 onconvertit la date en francais
            $dateFR = date("d-m-Y", $timestamp);
            echo $dateFR;

            //echo $this->birthdate;
        }
        public function displayImage()
        {
            echo $this->imageAutor;
        }
    }


    ?>