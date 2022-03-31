<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Les fonctions</title>
</head>
<body>
<div class="div1">
<?php 

///////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                             ///
///                                   Les fonctions php                                         ///
///                                                                                             ///
///////////////////////////////////////////////////////////////////////////////////////////////////

echo date("d/m/y"); //ici la fonction date


$tab = array("Bonjour", "tout", "le", "monde"); //ici permet d'utiliser la fonction 
        $chaine = implode("", $tab);            //pour les éléments du tableau en chaine de caractère
        echo $chaine.'<br>';


        $chaine = "Bonjour tout le monde";
        $tab = explode(" ", $chaine);
        print_r($tab);

/////////////////////////////////////////////////////////////////////////////////////////////////////



$chaine = "bonjour tout le monde";// ici permet de mettre en majuscule
$chaine = strtoupper($chaine);
echo $chaine.'<br>';



/////////////////////////////////////////////////////////////////////////////////////////////////////

$chaine = "Bonjour tout le monde";      //ici pratique pour compter le nombre de caractère
$longueur = strlen($chaine);
echo $longueur.'<br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////


$chaine = "Bonjour tout le monde";
$chaine = str_replace("tout", "tous", $chaine);  // ici remplace les lettres
echo $chaine.'<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                             ///
///                                   exercice php                                              ///
///                                                                                             ///
///////////////////////////////////////////////////////////////////////////////////////////////////

function exo1(){
$tab=array(55,60,49);               //exo 1
$moyenne = array_sum($tab)/count($tab);
echo $moyenne.'<br>';
}exo1();

function exo2(){
$ages = ['Mathilde' => 'math@gmail.com', 'Mika' => 'Michael-73@live.fr'];           //exo 2
foreach($ages as $clef => $valeur){
echo $clef. ' a ' .$valeur.'<br>';
}}exo2();


?>
</div>
</body>
</html>