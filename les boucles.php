<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body>
<div class="div1">
<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                         ici la boucle s 'execute avant l'instruction                                ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$chf = 0;

while ($chf < 10){
echo $chf;   //instructions
$chf++;
}

?><br>
<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                                         ici la boucle s 'execute après l'instruction                                ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$chf = 0;

do {
echo $chf;   //instructions
$chf++;
} while ($chf < 10);
?><br>
<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                         ici la boucle FOR qui s'exécute autant de fois que l'ont souhaite                           ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

for ($chf = 0; $chf < 11; $chf++) {
    echo $chf;
}

?><br>
<?php
/// elle est souvent utiliser pour parcourir un tableau 
$chf = array(1,2,3,4,5,"Robert",7,8,9,10);

for ($i = 0; $i < count($chf); $i++) {
    echo $chf[$i];
}

?><br>
<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///                                                                                                                     ///
///                              ici la boucle FOREACH qui s'exécute pour chaque éléments                               ///
///                                                                                                                     ///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$chf = array(1,2,3,4,5,"Robert",7,8,9,10);

foreach ($chf as $valeur) {
    echo $valeur;
}

/// une autre boucle FOREACH qui arrivera jusqu'à 10 avant d'afficher l'eco

$chf = array(1,2,3,4,5,"Robert",7,8,9,10);

foreach ($chf as $valeur) {
    echo $valeur;
    if ($valeur == 10) {
    echo "C'est la fin";
}
}
?>
</div>




<div class="div1">
    <h1>Les exercices</h1>
<?php


$chf = 73000;

do {
echo $chf;   ///exo 1
$chf++;
} while ($chf < 74000);
?><br>
<?php

/////////////////////////////////


for ($chf = 0; $chf <= 50; $chf+=5) {
    echo $chf; ///exo2
}

?><br>
<?php
//////////////////////////////////

for ($chf = 1; $chf <= 333; $chf++) {
    echo $chf="1". $chf="22". $chf="333"; //exo3

for ($chf = 333; $chf <= 55555; $chf++) 
    echo $chf="4444".$chf="55555"; //exo3
}

?><br>
<?php
//////////////////////////////////

$k = 0;
while($k <= 20) {
    if($k == 10) {
        echo '<strong>'.$k.'</strong>';
    }   else {
        echo $k;    /// exo4
    }
    echo '';
    $k = $k +2;
}

/////////////////////////////////
?><br>
<table>
<?php

$n = 1;

for ($chf = 1; $chf <= 10; $chf++){     ///exo 5
echo "<tr>";
for ($j = 1; $j <= 10; $j++){
    echo "<td>";
    echo $n;
    $n++;
    echo "</td>";
}  
    echo "</tr>";
}


?><br>
</table>
</body>
</html>