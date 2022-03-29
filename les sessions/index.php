<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
     <title>Session</title>
</head>
<body>
     <form action="login.php" method="post">
          <div class="container">
               <div class="row">
                    <div class="col-md-6 offset-md-3">
                         <div class="form-group">
                              <label for="">Username</label>
                              <input type="text" name="login" class="form-control" style="width:200px" required>
                         </div>
                         <br>
                         <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" name="password" class="form-control" style="width:200px" required>
                         </div>
                         <br>
                         <div class="form-group">
                              <button type="submit" class="btn btn-primary">Login</button>
                         </div>
                    </div>
               </div>
          </div>
     </form>

</body>
</html>