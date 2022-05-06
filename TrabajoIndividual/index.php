<?php 

 ?>
 <!DOCTYPE html>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recoger datos</title>
  </head>
  <body>
  	<h1>Datos enviados</h1>
    <form action="index.php" method="post">
    <p>Nombre: <input type="text" name="nombre" /></p>
    <p>Apellido: <input type="text" name="apellido" /></p>
    <p><input type="submit" name="submit" value="enviar" /></p>
    </form>
  <!--<?php  
	 /*echo "Tu nombre: "; echo $_POST['nombre']; echo "<br/>";
	 echo "Tu apellido: "; echo $_POST['apellido']; echo "<br/>";*/
  ?>-->
  
    <?php 
    //session_start();
    //$_SESSION["personas"]=[]
    //array_push(,"$_POST")
    class Persona{
      public $nombre;
      public $apellido;
      //public $fechadenacimiento;
    }
    $personas = array();
    array_push($personas, nombre, apellido);

    
     ?>
  <pre>
    
  </pre>

 
 </body>
 </html>