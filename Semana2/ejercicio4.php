<?php 
	if(isset($_POST['diametro'])) { //revisa si se enviaron las variables

		$diametro=$_POST["diametro"];
		echo "El diametro del circulo es: $diametro";
		echo "<br>";
		//$area=3.14*$diametro;
		$area=3.14*(pow(($diametro/2),2));
		echo "El area del circulo es: $area";
		echo "<br>";
		$circunferencia=3.14*$diametro;
		echo "La circunferencia del circulo es: $circunferencia";
		echo "<br>";
		
	}

	echo "<a href='index.html'>Regresar</a>";
?>