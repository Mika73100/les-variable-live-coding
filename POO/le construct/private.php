<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>POO private</title>
</head>
<body>
    <?php
    //ici l'interet de mettre un construct et un déstruct permet de réinitialiser les valeurs.
    //private permet d'utiliser la classe sans pouvoir ma modifier la changer elle sera donc protéger.
    

    class Personne{
    private $prenom;

    public function __construct($prenom)
    {
            $this->prenom = $prenom;
    }
    

    public function direBonjour(){
        echo 'Bonjour'  .$this->prenom."!<br>";
    }

    public function __destruct()
    {
        $this->prenom = Null;
        echo "\n Le prénom a été détruit";
    }
    
    }

    $objet = new Personne(' mika');
    $objet->direBonjour();



    ?>
</body>
</html>