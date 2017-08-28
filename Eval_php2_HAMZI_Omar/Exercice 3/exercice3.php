<?php

    class Voiture{


            // Variable GLOBAL //
        private $mysqli;

                    // CONSTRUCTEUR\\

        public function __construct(){
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
        }

                    // AJOUT DE VEHICULE \\
        public function enregistrer( $laMarque, $leModele, $lAnnee, $laCouleur){

            $this->mysqli->query("INSERT INTO `voiture`(`modele`, , `nombre_place`, `marque`, `couleur`, `annee`) VALUES ( '$leModele', '$nombrePorte', '$nombrePlace', '$laMarque', '$laCouleur', '$lAnnee' )");
        }

                // AFFICHAGE DU VEHICULE\\
        public function lecture(){
            $listeVehicule = $this->mysqli->query("SELECT * FROM vehicule");
            $tableauVehicule = $listeVehicule->fetch_all(MYSQLI_ASSOC);
            echo "<pre>";
            print_r($tableauVehicule);
            echo "</pre>";
        }

                // SUPPRESSION D'UN VEHICULE\\
        public function supprimer($id){
            $this->mysqli->query("DELETE FROM `vehicule` WHERE id = $id");
        }

    }
                    // INSTANCIATION\\
    $vehicule = new Voiture();
    $vehicule->enregistrer($_POST["modele"], $_POST["marque"], $_POST["couleur"], $_POST["annee"]);






 ?>
