<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
	die("No hay conexión: ".mysqli_connect_error()); 
}	

$usuario= $_POST["txtusuario"];
$pass= $_POST["txtpassword"];

 $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$usuario."' and password= '".$pass."'");
 $nr = mysqli_num_rows($query);
 
if($nr==1){
	
	//header("Location:pagina.html")
	echo "Bienvenido: " .$usuario;	
}
else if($nr==0)
{
	header("Location:login.html");
	//echo "No Ingreso";
}	


?>