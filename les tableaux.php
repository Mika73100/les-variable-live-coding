<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>les tableaux</title>
</head>
<body>
<div class="div1">
<?php



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                      1er façon d écrire un tableau:                                                 ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $tableau = array('valeur1', 'valeur2', 'valeur3', 'valeur4');



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                      2ème façon d écrire un tableau:                                                ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $tableau[1] = 'valeur1';
            $tableau[2] = 'valeur2';
            $tableau[3] = 'valeur3';
            $tableau[4] = 'valeur4';

            echo $tableau[1]."<br>";



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///               un tableau associatif c'est le fait de mettre des noms au lieux des chiffres:                         ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $tableau = array(
            'prenom' => 'Michaël',
            'nom' => 'BARRECA',
            'ville' => 'aix-les-bains',
            'pays' => 'France'
            );
            
            echo $tableau['ville']."<br>";



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                                ici je parcour le tableau :                                          ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $tableau = array(
            'prenom' => 'Michaël',
            'nom' => 'BARRECA',
            'ville' => 'aix-les-bains',
            'pays' => 'France'
            );
            
                for($i = 0; $i < 4; $i++)
            echo $i."<br>";



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                 ici permet de rajouter une valeur a mon tableau :                                   ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $tableau = array(
            'prenom' => 'Michaël',
            'nom' => 'BARRECA',
            'ville' => 'aix-les-bains',
            'pays' => 'France'
            );
            
                foreach($tableau as $clef => $i)
            echo "[".$clef."] = ".$i."<br>";
            //ici je peut rajouter le print_r($tableau) qui permet de voir si les données sont bien récupérer



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                 ici permet d'afficher un élément qui existe seulement :                             ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $tableau = array(
            'prenom' => 'Michaël',
            'nom' => 'BARRECA',
            'ville' => 'aix-les-bains',
            'pays' => 'France'
            );
            
                if(array_key_exists('nom', $tableau))
            {
            echo "OK"."<br>";
            }   else{
            echo "Niet";
            }



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                 ici permet d'afficher un élément inexistant :                                       ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $bouffe = array('burger', 'frite', 'salade', 'tomates');
            
                if(in_array('couscous', $bouffe))
            {
            echo "OK"."<br>";
            }   else{
            echo "Niet"."<br>";
            }



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                          =ici permet d'afficher la position d'un élément dans un tableau :                          ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $bouffe = array('burger', 'frite', 'salade', 'tomates');
            
                $position = array_search('frite',$bouffe);
            echo $position."<br>";//ici nous pouvons remarquer que le tableau commence toujours a zéro puis 1 . 2 . 3



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                                  ici exercice :                                                     ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            $tableau = array(
            'France' => 'Paris',
            'Italie' => 'Rome',
            'Allemagne' => 'Berlin',    //exo1
            );    
                foreach($tableau as $clef => $i)
            echo "[".$clef."] = ".$i."<br>";



            $tab = array();
            $i = 0;
                while($i < 10) {
                $tab[] = rand(0, 100);  //exo2
                $i++;
            }
                if(in_array( 42, $tab)) {
            echo "OK 42". "<br>";
            }   else {
            echo "NON pas de 42". "<br>";
            }
            var_dump($tab);



            $tableau = array();
            $tableaupetit = array();
            $tableaugrand = array();        // ici je déclare mes valeurs
            $i = 0;
                while($i < 10) {
                $tableau[] = rand(0, 100);        // exo 3
                $i++;
            }
                foreach($tableau as $t) {
                if($t < 50) {
                $tableaupetit[] = $t; 
            }
                else {
                $tableaugrand[] = $t;
            }
            }
            echo '<br> Tableau Grand : ';   //ici je met les conditions des tableaux
                foreach($tableaupetit as $t1) {
            echo $t1.' ';
            }
            echo '<br> Tableau Petit : ';      //ici je met les conditions des tableaux
                foreach($tableaugrand as $t2) {
            echo $t2.''."<br>";
            }





            $pays_population = array(
                'France' => 67595000,
                'Suede' => 9998000,
                'Suisse' => 8417000,
                'Kosovo' => 1820631,            //exo 4
                'Malte' => 434403,
                'Mexique' => 122273500,
                'Allemagne' => 82800000,
            );
            echo '<h1>Pays:</h1><ul>';
                foreach($pays_population as $pays => $population) {
                if($population >= 20000000) {
            echo '<li>'.$pays.'</li>';
            }
            }
            echo '</ul>';



            $pays_population = array(
                'France' => 67595000,
                'Suede' => 9998000,
                'Suisse' => 8417000,
                'Kosovo' => 1820631,            //exo 5
                'Malte' => 434403,
                'Mexique' => 122273500,
                'Allemagne' => 82800000,
                );
                echo "Le tableau contient ".count($pays_population);


?>
</body>
</html>