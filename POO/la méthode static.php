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

        class Coucou
        {
            const NB = 'voilà';
    
            private static $var = 'Voilà !';
    
            public static function saycoucou()
            {
                echo self::NB;
            }
        }
        Coucou::saycoucou();
    
    
?>
</body>
</html>