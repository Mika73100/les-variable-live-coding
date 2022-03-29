<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Coloriage</title>
</head>

<body>
     <form action="coloriage.php" method="post">
          <div class="container">
               <div class="content">
                    <p class="cont-city">
                         <label for="couleurs">Couleurs de fond</label>
                         <input type="color" name="couleur" id="couleur">
                         </p>
                         <p>
                         <p>Couleurs du texte <br>pays</p>
                         <label for="text"></label>
                         <input type="color" name="text" id="text">
                         </p>

               <button type="submit" value="envoyer">Envoyer
               <button type="boutton" value="raffraichir" onclick="window.location.reload()">Reset
               </div>
          </form>
          <?php
          if (isset($_COOKIE['couleur'])&&(isset($_COOKIE['text']))){
               $tab = array();
               $tab['couleur'] = $_POST['couleur'];
               setcookie('couleur', $tab['couleur'], time() +20);
               $tab['text'] = $_POST ['text'];
               setcookie('text', $tab['text'], time() +20);
          }
          if (isset($_COOKIE['couleur'])&&(isset($_COOKIE['text']))){
               echo '<p style="color: ' . $_COOKIE['couleur'] . ';color: ' . $_COOKIE['text'].' ;">
               <i class="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum dolores 
               eius suscipit saepe cupiditate? Quod recusandae adipisci deserunt quaerat, hic inventore 
               natus iste nulla ut nam assumenda labore vitae voluptatibus.></i></p>';
          }
          ?>
     </body>
</html>