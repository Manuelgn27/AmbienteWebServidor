<?php 
	if(isset($_POST['num1'])) { //revisa si se enviaron las variables

		$salarioxhora=$_POST["num1"];
		$c1=number_format($salarioxhora, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "El salario por hora es: $c1";
		echo "<br>";
		$salarioxdia=$salarioxhora*8;
		$c2=number_format($salarioxdia, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "El salario por dia: $c2";
		echo "<br>";
		$salarioxsemana=$salarioxdia*7;
		$c3=number_format($salarioxsemana, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "El salario por semana: $c3";
		echo "<br>";
		$salariobruto=$salarioxsemana*4;
		$c4=number_format($salariobruto, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "El salario bruto: $c4";
		echo "<br>";
		$deduccion=($salariobruto*9)/100;
		$c5=number_format($deduccion, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "Deduccion CCSS: $c5";
		echo "<br>";
		$salarioneto=$salariobruto-$deduccion;
		$c6=number_format($salarioneto, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "Salario Neto: $c6";
		echo "<br>";
	}

	echo "<a href='index.html'>Regresar</a>";
?>