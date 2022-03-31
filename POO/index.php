<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>index avec annexe</title>
</head>
<body>


    <?php
    require_once 'annexe.php';

    class Calculatrice extends Annexe
    {
        public function hello()
        { 
            echo "Bienvenue sur ma superbe calculatrice <br>";
        }
    }
    $obj = new Calculatrice();
    $obj->hello();
    $obj->hello(25, 25);


    ?>
</body>
</html>