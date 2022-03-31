<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getteur et setteur</title>
</head>
<body>
    <?php 

// avec les get on appel les attribut
// avec les set on modifie les attribut
// __set __get
//getIpti et setIpti

class Personne {
    private $prenom;
    public function __construct($prenom)
    {
        $this->prenom=$prenom;
    }
    public function monprenom()
    {
        echo "Mon prénom est : ".$this->prenom."<br>";
    }
    //ici pour appeler ma fonction
    public function getprenom(){
        return $this->prenom;
    }
    //ici pour rappeler ma fonction et la modifer      
    public function setprenom($nouveauprenom){
        
        $this->prenom = $nouveauprenom;
    }
}

$objet = new Personne('Robert');
$objet->monPrenom();

$objet->setPrenom('Micheline');
$objet->monprenom();

    ?>





    <?php

    /////////////////////////////////EXERCICE////////////////////////////////////

    class Chien {
        private $nom;
        private $age;
        private $race;
    
    public function __construct($nom, $age, $race)
        {
            $this->nom = $nom;
            $this->age = $age;
            $this->race = $race;
        }
        public function monChien(){
            echo "Mon nom est : " .$this->nom." j'ai ".$this->age." ans et je suis un".$this->race."<br>";
        }
    
    
        public function setChien($nouveauNom, $nouveauAge, $nouveauRace){
            $this->nom = $nouveauNom;
            $this->age = $nouveauAge;
            $this->race = $nouveauRace;
        }
    }
    
    
    
    $chien1 = new Chien ("Pam","15","Yorkshire");
    $chien1->monChien();
    
    $chien1->setChien("Bebert","17","Gros");
    $chien1->monChien();
    
    $chien1->setChien("Albert","22","Essouflé");
    $chien1->monChien();

?>
</body>
</html>