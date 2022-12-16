<?php session_start();
   require 'connect_data.php';
   $users = (new MongoDB\Client)->mydb->users; 

   if (isset($_GET['id'])) {
      $users=findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
      echo $users;
      //$datos = $users->find();
   }
   /*foreach ($datos as $dato) { 
      $usuario = $dato["username"];
   
}
*/

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
         <form method="POST" action="editandousuario.php">
               <p><strong>Nuevo usuario</strong>
               <input type="text" name="nuser" value="<?php echo $usuario;?>"></p>
               <p><strong>Nueva contraseña</strong>
               <input type="password" name="npass"><p>
               <br>
               <button type="submit" name="submit" class="btn btn-success">Enviar</button>
            </div>
         </form>
      </div>
   </body>
</html>