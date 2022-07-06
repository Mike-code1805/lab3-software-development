<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
       <!--Aquí debe de ser insertado el código php-->
       <?php 
	$nombres_string = (string)'Miguel Enrique, '; 
	$apellidos_string = (string) 'Saca Accostupa'; 
	echo 'Nombre Completo: '.$nombres_string.$apellidos_string.'<br>'; 
	$codigo_string = (string) 'Codigo'; 
	echo 'Código del estudiante: '.$codigo_string.'<br>'; 
    $edad_entero = (integer) 22 ; 
	echo 'Edad del estudiante: '.$edad_entero.'<br>'; 
       ?>
  
   </body>
</html>