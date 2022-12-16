<?php session_start();
   require 'connect_data.php';
   $users = (new MongoDB\Client)->mydb->users; 

   if (isset($_GET['id'])) {
      $users =findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
      $users->updateOne(
          ['_id' => new MongoDB\BSON\ObjectID()],
          ['$set' => ['username' => $_POST['nuser'], 'password' => $_POST['npass']]]
      );
      $_SESSION['success'] = "Información editada correctamente";
      header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Edicion</title>
   </head>
   <body>
         <br>
         <h1>Editar información</h1>
         <a href="index.php" class="btn btn-primary">Ir atras</a>
         <form method="POST">
               <p><strong>Nuevo usuario</strong>
               <input type="text" name="nuser"></p>
               <p><strong>Nueva contraseña</strong>
               <input type="password" name="npass"><p>
               <br>
               <button type="submit" name="submit" class="btn btn-success">Enviar</button>
            </div>
         </form>
      </div>
   </body>
</html>