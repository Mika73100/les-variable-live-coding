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
        <form method="POST">

            <input class="text" type="number" name="chiffre1">

            <select name="operation" id="select">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>


            <input class="text" type="number" name="chiffre2"><br>

            <input class="input" type="submit">
            <input class="input" type="reset">
        </form>

<?php

    if ( isset($_POST['chiffre1']) &&  isset ($_POST['chiffre2']) &&  isset($_POST['operation'] ))
    if ( !empty ( $_POST['chiffre1'] ) && !empty( $_POST['chiffre2'] ) && !empty( $_POST['operation'] )){


    $chiffre1 = $_POST['chiffre1'];
    $chiffre2 = $_POST['chiffre2'];
    $operation = $_POST['operation'];

        if($operation == "+" ) {        
            echo $chiffre1 + $chiffre2;}
        elseif($operation == "-"){
            echo $chiffre1 - $chiffre2;}
        elseif($operation == "/"){              // ici je met le double == pour crée une condition en genre et en nombre
            echo $chiffre1 / $chiffre2;}
        else{
            echo $chiffre1 * $chiffre2;}
        
        }
    
?>



</body>
</html>