<?php
     //on va inclure la connexion
     require_once('connect.php');
     $sql = "'SELECT * FROM 'liste'";
     //on prépare la requete
     $query = $db->prepare($sql);
     //on exécute la requete
     $query->execute();
     //on stock le resultat dans un tableau associatif
     $result = $query->fetchAll(PDO::FETCH_ASSOC);
     require_once('close.php');
     ?>


<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style.css">
     <title>Formulaire de création d'utilisateur</title>
</head>

<body>
     <div class="container">
     <form action="index.php" method="post">
          <div class="form-group">
               <label for="name">Nom</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
          </div>
          <div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
               <label for="password">Mot de passe</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
          </div>
          <div class="form-group">
               <label for="phone">Téléphone</label>
               <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone">
          <button type="submit" class="btn btn-primary mt-2">Submit</button>
     </form>
     </div>



</body>
</html>