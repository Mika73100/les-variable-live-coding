<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">



    <title>Formulaire</title>
</head>

<body>

    <?php


//////////////////////////////Crée un formulaire ////////////////////////////////////


    //echo "Hello world";
    //echo date('d/m/y h:i:s');

    // ici j'utilise pas les points pour crée une conquaténation entre les différents texte 
    //$age = 44;
    //$prenom = "leo";
    //$nom = "Dubois";
    //echo "Bonjour $prenom $nom $age";

    ?>
<div class="div1">
    <form method="POST">
        <label for="nom">ici votre nom</label><br>
        <input class="text" type="text" name="nom"><br>

        <label for="age">ici votre age</label><br>
        <input class="text" type="number" name="age"><br>

        <input class="input" type="submit">
    </form>

    <?php

    $nom = $_POST['nom'];
    $age = $_POST['age'];

    if (!empty($_POST['nom']) && !empty($_POST['age']))

    echo "Bienvenue $nom vous avez, $age ans .";
    
    
    else

    echo 'Merci de remplir tous les champs';
    ?>

</div>
</body>

</html>