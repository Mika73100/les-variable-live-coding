<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>POO php orienté objet</title>
</head>
<body>
    <?php 


    class Ville
    {   //ici je défini un attributs        //exo1
        public $nom;
        public $departement;
        
        //methode
        //ici j'utiliser le constructeur
        function __construct($nom,$departement){
            $this->ville = $nom;
            $this->dep = $departement;
        }
        public function ville_x(){
            echo "J'habite " . $this->ville .  $this->dep;
        }
    }

    $objet = new Ville('paris','91');
    $objet->ville_x();
    
    $bled = new Ville('Tombouctou','01');
    $bled->ville_x();
    



?>
</body>
</html>