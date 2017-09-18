<?php 
	if (isset($_POST['correo'])) {
			$correo=$_POST["correo"];
			echo "El correo es: $correo";
			echo "<br>";
			if (false !== strpos($correo, "@") && false !== strpos($correo, ".")) {
				echo "Correo Valido";
				echo "<br>";
			}
			else{

				echo "Correo No Valido";
				echo "<br>";
			}
		}
		echo "<a href='index.html'>Regresar</a>";
?>