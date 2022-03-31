<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Destructeur</title>
</head>
<body>
<?php




class Personne{

public $nom;
public $prenom;
public $adresse;

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

public function setAdresse($adresse){
$this->adresse = $adresse;
}


public function getPersonne(){
return $this->nom;
}
public function personneX(){
echo "Je m'appelle " . $this->nom ." ". $this->prenom . " j'habite à " . $this->adresse . "<br>";
}
}

$personne1 = new Personne("Mika", "BIBI", " 7, rue chez moi");
$personne1->setAdresse(" 9, rue quelque part");
$personne1->personneX();


?>
</body>
</html>