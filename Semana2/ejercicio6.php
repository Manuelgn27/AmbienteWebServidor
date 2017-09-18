<?php 
	if (isset($_POST['altura'])) {
		$altura=$_POST["altura"];
		$peso=$_POST["peso"];
		echo "Su altura es: $altura<br>";
		echo "Su peso es: $peso<br>";
		$IMC= $peso/pow($altura,2);
		echo "Su IMC es $IMC<br>";
		if($IMC<16){//$IMC>=19 && $IMC<22

			echo "Delgadez severa";
		}
		elseif ($IMC>=16 && $IMC<=16.99) {
		 	echo "Delgadez moderada";
		 } 
		 elseif ($IMC>=17 && $IMC<=18.49) {
		 	echo "Delgadez leve";
		 }
		 elseif ($IMC>=18.50 && $IMC<=24.99) {
		 	echo "Normal";
		 }
		 elseif ($IMC>=25.00 && $IMC<=29.99) {
		 	echo "Preobeso";
		 }
		 elseif ($IMC>=30.00 && $IMC<=34.99) {
		 	echo "Obesidad leve";
		 }
		 elseif ($IMC>=35.00 && $IMC<=39.99) {
		 	echo "Obesidad media";
		 }
		 else {
		 	echo "Obesidad mórbida";
		 }
		}
		echo "<br>";
		echo "<a href='index.html'>Regresar</a>";
?>