<?php 
	$db=new mysqli("localhost","admin","12345","registro_civil");
	
	if (isset($_POST['cedula'])) {
		$cedula=$_POST['cedula'];
		$nombre=$_POST['nombre'];
		$apellido1=$_POST['apellido1'];
		$apellido2=$_POST['apellido2'];
		$fechanacimiento=$_POST['fechanacimiento'];
		$estadocivil=$_POST['estadocivil'];
		$provincia=$_POST['provincia'];
		$canton=$_POST['canton'];
		$distrito=$_POST['distrito'];
		//insert into TABLA(COLUMNAS) values(Datos)
		//cuando tengo parametros llamo al siguiente metodo
		$consulta=$db->prepare
			("Insert into personas(cedula, nombre, apellido1, apellido2, fechanacimiento, estadocivil, provincia, canton, distrito) values(?,?,?,?,?,?,?,?,?)");
			//i primera letra de la cadena indica el tipo i entero, s tipo string
			$consulta->bind_param("sssssssss", $cedula, $nombre, $apellido1, $apellido2, $fechanacimiento, $estadocivil, $provincia, $canton, $distrito); 

			$consulta->execute();
			if ($consulta->affected_rows>0) {
				echo "<h2>Insercion exitosa</h2>";
				echo "<hr>";
				echo "<a href='index.php'>Regresar</a>";
			}
			else{

				echo "<h2>Fallo al insertar</h2>";
				echo "<h3>".$db->error."</h3>";
				echo "<hr>";
				echo "<a href='index.php'>Regresar</a>";
			}

	}else echo "<a href='index.php'>Regresar</a>";

	$db->close();
?>