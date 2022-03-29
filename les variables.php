<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">


    <title>Boucle</title>
</head>

<body>


    <?php

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///                                                                                                                     ///
    ///                                         Crée une boucle simple                                                      ///
    ///                                                                                                                     ///
    ///                                                                                                                     ///
    ///                                                                                                                     ///
    ///     == égale a                                                                                                      ///
    ///     === strictement égale a                                                                                         /// 
    ///     != différent de                                                                                                 /// 
    ///     !== strictement différent de                                                                                    /// 
    ///     < inférieur de                                                                                                  ///
    ///     > supperieur de                                                                                                 ///
    ///     <= inférieur ou égale a                                                                                         ///
    ///     >= suppérieur ou égale a                                                                                        ///
    ///                                                                                                                     ///
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    $age = 18;
    if ($age >= 18) {
        echo "Vous etes majeur";        // ici s'affiche je suis majeur
    } elseif ($age >= 12) {
        echo "vous etes adolescent";
    } else {
        echo "vous etes mineur";
    }



    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    $age = 35;
    if ($age >= 18 and $age <= 55) {   // ici s'affiche je suis majeur
        echo "Vous etes majeur";
    } elseif ($age >= 18) {
        echo "vous etes adolescent";
    } else {
        echo "vous etes mineur";
    }


    $heur = 5;                              // ici j'utilise le AND pour pouvoir afficher trois situation différente
    if ($heur <= 12 and $heur >= 00) {
        echo "C'est le matin";
    } elseif ($heur <= 18) {
        echo "c'est l'après-midi'";
    } else {
        echo "c'est le soir";
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    $plat = "pizza";
    if ($plat == "pizza" or $plat == "salade") {   // ici s'affiche je suis majeur
        echo "vous avez choisi un plat";
    } else {
        echo "vous n'avez pas choisi de plat";
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    $plats = "steack";

    switch ($plats) {         // ici le switch va nous permettre d afficher le echo que nous avons selectionner
        case "steack":
            echo "vous avez choisi un plat de viande";
            break;
        case "légumes":
            echo "vous avez choisi un plat de légumes";
            break;
        default:
            echo "vous avez choisi un plat inconnu";
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////


    $age = 17;
    $majeur = ($age >= 18) ? "Majeur" : "Mineur"; //ici j'utilie le ternaire et je remplace else et if par ? :
    echo $majeur;




    ?>
</body>

</html>