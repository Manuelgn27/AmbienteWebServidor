<?php 
	if (isset($_POST['subtotal'])) {
		$subtotal=$_POST["subtotal"];
		$c1=number_format($subtotal, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "El subtotal es: $c1";
		echo "<br>";
		$pago=$_POST["pago"];
		$c2=number_format($pago, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "Pago con: $c2";
		echo "<br>";
		$impuesto=13;
		echo "Debe dar impuesto: $impuesto%";
		echo "<br>";
		$impv=($subtotal*13)/100;
		$totalpagar=($subtotal+$impv);
		$c3=number_format($totalpagar, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "Total a Pagar: $c3";
		echo "<br>";
		$vuelto=$pago-$totalpagar;
		$c4=number_format($vuelto, $decimals = 2 , $dec_point = "." , $thousands_sep = "," );
		echo "El vuelto es: $c4";
		echo "<br>";
	}
	echo "<br>";
	echo "<a href='index.html'>Regresar</a>";
?>