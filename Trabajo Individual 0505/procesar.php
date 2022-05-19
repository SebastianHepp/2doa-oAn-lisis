<?php 
$errores=[];
$error=0;
session_start();
if (!isset($_SESSION["personas"])) {
	$_SESSION["personas"]=array();
}
if ($_POST){
	if ($_POST['nombre']==""){
		$error++;
	    array_push($errores,"El nombre no debe estar vacio");
	}
	if ($_POST['apellido']==""){
		$error++;
	    array_push($errores,"El apellido no debe estar vacio");
	}
	$nfecha=date_parse($_POST['fenac']);
	if ($nfecha['error_count'] ){
		$error++;
	  	array_push($errores,"la fecha debe ser valida ");
	}
	else{
		array_push($_SESSION["personas"], array("nombre" => $_POST['nombre'],  "apellido" => $_POST['apellido'], "fenac" => $_POST['fenac']));
	}
}	
if ($error>0) {
	array_pop($_SESSION["personas"]);
	echo '<pre>';
  	print_r($errores);
  	echo  '</pre>';
}
elseif($_SESSION["personas"]>0){		
		echo '<pre>';
		print_r($_SESSION["personas"]);
		echo  '</pre>';
	}
else{
	echo "la solicitud no puede ser procesada";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Recoger datos</title>
</head>
<body>
	<h1>Trabajo Individual 05/05</h1>
<div class="container">
	<div class="body">
	</div>
    <div class="">
    	<form class="" action="procesar.php" method="post">
	        <input type="text" name="nombre" value="" placeholder="Ingrese el nombre"> <br>
	        <input type="text" name="apellido" value="" placeholder="ingrese Apellido"><br>
	        <input type="text" name="fenac" value="<?php echo date("d-m-Y"); ?>" placeholder="ingrese Fecha de Nacimiento"><br>
	        <button type="submit">Enviar</button>
       	</form>
    </div>
    <pre>


</div>

</body>
</html>