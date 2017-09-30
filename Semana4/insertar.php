<?php 
	$db=new mysqli("localhost","admin","12345","citas_medicas");
	
	if (isset($_POST['paciente'])) {
		$paciente=$_POST['paciente'];
		$medico=$_POST['medico'];
		$fechacita=$_POST['fechacita'];
		$costo=$_POST['costo'];
		$sucursal=$_POST['sucursal'];
		//insert into TABLA(COLUMNAS) values(Datos)
		//cuando tengo parametros llamo al siguiente metodo
		$consulta=$db->prepare
			("Insert into citas(paciente, medico, fechacita, costo, sucursal) values(?,?,?,?,?)");
			//i primera letra de la cadena indica el tipo i entero, s tipo string
			$consulta->bind_param("sssds", $paciente, $medico, $fechacita, $costo, $sucursal); 

			$consulta->execute();
			if ($consulta->affected_rows>0) {
				echo "<h2>Insercion exitosa</h2>";
				echo "<a href='index.php'>Regresar</a>";
			}
			else{

				echo "<h2>Fallo al insertar</h2>";
				echo "<h3>".$db->error."</h3>";
				echo "<a href='index.php'>Regresar</a>";
			}

	}else echo "<a href='index.php'>Regresar</a>";

	$db->close();
?>