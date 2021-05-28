
 <?php // toujours commenter pour les bonnes pratiques
    /**
     * Acteur
     *@author Nabil
     */

    class Acteur
    { // Définition de nos proprietes
        //avec des valeurs par defaut
        public $lastname;
        public $firstname;
        public $birthdate;
        public $imageActor;
        public $deathdate;
        public $age;
        public $mortouvivant;

        /**
         * Method __construct
         *
         * @param string $lastname affiche le nom
         * @param string $firstname affiche le prenom
         * @param string $birthdate la date de naissance
         * @param string $imageActor la photo de l acteur
         *
         * @return void
         */
        public function __construct(string $lastname, string $firstname, string $birthdate, string $deathdate, string $imageActor)
        {
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->birthdate = $birthdate;
            $this->deathdate = $deathdate;
            $this->imageActor = $imageActor;
            $this->age = $this->calculAge();
            $this->mortouvivant = $this->mortOuvivant();
        }
        /**
         * Method displayAuteur
         *
         * @return void
         */
        public function displayLastname()
        {
            echo $this->lastname;
        }

        public function displayFirstname()
        {
            echo $this->firstname;
        }

        public function displayBirthday()
        { //1 onconvertit la date en timestamps
            $timestamp = strtotime($this->birthdate); // YYYY-MM-dd ==>TIMESTAMP
            //2 onconvertit la date en francais
            $dateFR = date("d-m-Y", $timestamp);
            echo $dateFR;

            //echo $this->birthdate;
        }
        public function displayDeathday()
        {
            if (!empty($this->deathdate)) {
                $timestamp = strtotime($this->deathdate);
                $dateFR = date("d-m-Y", $timestamp);
                echo $dateFR;
            } else {
                echo "Non renseigne";
            }
        }
        public function calculAge()
        {
            $origin = new DateTime($this->birthdate);
            $target = new DateTime(date("Y-m-d"));
            $interval = $origin->diff($target);
            return $interval->format('%y ans');
        }
        public function displayAge()
        {
            echo $this->age;
        }
        public function mortOuvivant()
        {

            if (!empty($this->deathdate)) {
                $origin = new DateTime($this->deathdate);
                $target = new DateTime(date("Y-m-d"));
                $interval = date_diff($target, $origin);
                return $interval->format("Cet acteur nous a quitte il y a %y ans et %m mois");
            } else {
                return ("IL EST EN VIE");
            }
        }

        public function displayMortouvivant()
        {
            echo $this->mortouvivant;
        }



        public function displayImage()
        {
            echo $this->imageActor;
        }
    }

    ?>
    