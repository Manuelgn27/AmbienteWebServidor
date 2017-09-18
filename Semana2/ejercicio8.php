<?php 
	if (isset($_POST['numero'])) {
		$numero=$_POST["numero"];
		$num = " ";
		echo "El numero es: $numero <br>";
		$cantidad=strlen($numero);

		$entera=explode(".",$numero);
		//print_r($entera);
		$pentera="$entera[0]";
		echo "La numero entero es: $pentera";
		echo "<br>";

		for($i=0;$i<strlen($pentera);$i++){
	        if(is_numeric($pentera[$i]))
	        {
	            $num =$pentera[$i];
	            echo "$num";
	        }
    	}
	}
	echo "<br>";
	echo "<a href='index.html'>Regresar</a>";
?>