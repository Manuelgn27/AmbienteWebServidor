<?php 
	if (isset($_POST['fecha'])) {
		$fecha=$_POST["fecha"];
		$date = str_replace('/', '-', $fecha);
		$fingresada=date('d-m-Y', strtotime($date));
		echo "La fecha ingresada es la siguiente: $fingresada";
		echo "<br>";

		$f2=date( "d-m-Y", strtotime("$date next tuesday"));
		echo "La fecha del siguiente martes es: $f2";
		echo "<br>";
	}
	echo "<br>";
	echo "<a href='index.html'>Regresar</a>";
?>