<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Destructeurs exo2</title>
</head>

<body>
    <?php
    class personne
    {
        private $nom;
        private $prenom;
        private $adresse;

        //Constructeur
        public function __construct($nom, $prenom, $adresse)
        {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        }
        //Destructeur
        public function __destruct()
        {
            echo "<script type=\"text/javascript\">alert('La personne nommée $this->prenom $this->nom \\nest supprimée de vos contacts')</script>";
        }
        //
        public function getpersonne()
        {
            $texte = " $this->prenom $this->nom <br /> $this->adresse <br />";
            return $texte;
        }
        //
        public function setadresse($adresse)
        {
            $this->adresse = $adresse;
        }
    }
    //Création d'objets
    $client = new personne("Geelsen", "Jan", " 145 Rue du Maine Nantes");
    echo $client->getpersonne();
    $client->setadresse("23 Avenue Foch Lyon");
    //appel du destructeur
    unset($client);
    ?>


</body>
</html>