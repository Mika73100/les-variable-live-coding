<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>La méthode static</title>
</head>
<body>
    <?php
        class Hello {
            private static $var = 'Voilà !';

            public static function sayhello(){
                echo self::$var;
            }
        }


///////////////////////////////////////////////////////////////////////////
        class Coucou
        {
            const NB = 'coucou';
    
            private static $var = 'coucou !';
    
            public static function saycoucou()
            {
                echo self::NB;
            }
        }
        Coucou::saycoucou();


///////////////////////////////////////////////////////////////////////////



    class Compteur
{
    private static $_compteur = 0;

    public function __construct()
    {
        self::$_compteur++;
    }

    public static function getCompteur()
    {
    return self::$_compteur;
    }
}

$test1 = new Compteur;
$test2 = new Compteur;
$test3 = new Compteur;
$test4 = new Compteur;
$test5 = new Compteur;

    echo Compteur::getCompteur();


    
    
?>
</body>
</html>