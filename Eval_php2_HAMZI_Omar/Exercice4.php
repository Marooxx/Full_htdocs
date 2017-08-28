<?php
 echo "<h2> Exercice 4</h2>";


class Chat{
private $mysqli;


    public $prenom;
    public  $age;
    public $color;
    public $sexe;
    public $race;

    public  function __construct($new_prenom,$new_age,$new_color,$new_sexe,$new_race)
    {
        if(strlen($new_prenom>3 || $new_prenom>20))
        {
            echo " Veuillez ressaisir votre prenom(entre 3 et 20 caractere)";
        }
        if(strlen($new_color>3 || $new_color>10))
        {
            echo " Veuillez ressaisir le type de couleur(entre 3 et 10 caractere)";
        }
        if(strlen($new_race>3 || $new_race>20))
        {
            echo " Veuillez ressaisir le nom de la race(entre 3 et 20 caracteres)";
        }

        $this->mysqli = new mysqli($this->host = "localhost", $this->user="root", $this->password ="", $this->database="chat");

        $this->prenom     = $new_prenom;
		$this->age        = $new_age;
		$this->color      = $new_color;
		$this->sexe       = $new_sexe;
		$this->race       = $new_race;
     }

    // SETTER\\
    public function setPrenom()
		{
		  $this->prenom = $new_nom;
		}

	public function setAge()
        {
	      $this->age = $new_age;
		}

    public function setColor()
		{
		  $this->color = $new_color;
		}

    public function setSexe()
        {
	      $this->sexe = $new_sexe;
		}

    public function setRace()
        {
	      $this->race = $new_race;
		}

        // GETTER\\

        public function getPrenom()
            {
              return $this->prenom;
            }
        public function getAge()
            {
             return $this->age;
            }

        public function getColor()
            {
             return $this->color;
            }

        public function getSexe()
            {
             return  $this->sexe;
            }

        public function getRace()
            {
              return $this->race;
            }

        public function getInfos()
        {
            echo "Prenom : ".$this->prenom."<br>";
			echo "Âge : ".$this->age." ans <br>";
			echo "Couleur du pelage : ".$this->color."<br>";
			echo "Sexe : ".$this->sexe."<br>";
			echo "Race : ".$this->race."<br>";
        }


}
/* ESSAI
$omar = new Chat("omar",34,"bleu","male","human");
$omar->getInfos();
echo "<br";
*/







?>
