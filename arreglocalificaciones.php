<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #566573;
			font-family: serif;
			color: white;
		    font-size: 34px;
		    text-align: center;
		}
	</style>
</head>
<body>
<?php

$calificaciones = array('Juan' => "8", 'Juliana' => "7", 'Mariano' => "9", 'Alfredo' => "6", 'Oniria' => "10", );

foreach($calificaciones as $alumno=>$calificacion){
     echo "La calificacion de " . $alumno . " es de " . $calificacion;
     echo "<br>";
}
echo "<BR>";

arsort($calificaciones);
foreach($calificaciones as $alumno=>$calificacion){
     echo "La calificacion de " . $alumno . " es de " . $calificacion;
     echo "<br>";
}
echo "<BR>";
var_export($calificaciones);
?>
</body>
</html>