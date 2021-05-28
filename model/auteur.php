
 <?php // toujours commenter pour les bonnes pratiques
    /**
     * Auteur
     *@author Nabil
     */

    class Auteur
    { // Définition de nos proprietes
        //avec des valeurs par defaut
        public $lastname;
        public $firstname ;
        public $birthdate ; // attention date en anglais
        public $imageAutor;

        /**
         * Method __construct
         *
         * @param string $lastname affiche le nom
         * @param string $firstname affiche le prenom
         * @param string $birthdate la date de naissance
         * @param string $imageActor la photo de l auteur
         *
         * @return void
         */
        public function __construct(string $lastname, string $firstname, string $birthdate, string $imageAutor)
        {
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->birthdate = $birthdate;
            $this->imageAutor = $imageAutor;
        }
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