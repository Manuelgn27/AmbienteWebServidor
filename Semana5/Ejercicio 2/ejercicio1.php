<?php 
	if (isset($_POST['subtotal'])) {
		$subtotal=$_POST["subtotal"];
		$c1=number_format($subtotal, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "El subtotal es: $c1";
		echo "<br>";

		$impuesto=13;
		echo "Debe dar impuesto: $impuesto%";
		echo "<br>";

		$impv=($subtotal*13)/100;
		$totalpagar=($subtotal+$impv);
		$c2=number_format($totalpagar, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "Total a Pagar con IV: $c2";
		echo "<br>";

		if ($totalpagar>=20000) {
			$descuento=($totalpagar*20)/100;
			echo "Si aplica descuento";
			echo "<br>";
			echo "El descuento es de: $descuento";
			echo "<br>";
			$pf=$totalpagar-$descuento;
			$c3=number_format($pf, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
			echo "El monto total a pagar es: $c3";
			echo "<br>";
		}else{
			$c2=number_format($totalpagar, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
			echo "No aplica descuento";
		}
	}
	echo "<br>";
	echo "<a href='formulario1.html'>Regresar</a>";
?>