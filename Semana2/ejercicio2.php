<?php 
	/*$n1=0;
	$n2=1;

	for($i=0; $i<=50; $i++)
	{
		$suma=$n1+$n2;
		$n1=$n2;
		$n2=$suma;
		echo $suma. " - ";
	}*/

	if (isset($_POST['num2'])) {

		$n1=1;
		$n2=$_POST["num2"];

		echo "La sucesión comienza con los números 0 y 1";
		echo "<br>";
		echo "El numero ingresado es: $n2";
		echo "<br>";

		for($i=0; $i<=50; $i++)
		{
			$suma=$n1+$n2;
			$n1=$n2;
			$n2=$suma;
			echo $suma. " - ";
		}
			echo "<br>";
		}
		
		echo "<a href='index.html'>Regresar</a>";
?>