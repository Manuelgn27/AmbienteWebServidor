<h1 align='center'>Detalles Personas</h1>
<?php /*detalles.php*/
	$db=new mysqli("localhost","admin","12345","registro_civil");

	if (isset($_GET['cedula'])) {
		$cedula=$_GET['cedula'];
		$consulta=$db->prepare//para pasar el parametro que quiero que busque
		("Select * From personas Where cedula=?");
		$consulta->bind_param("s",$cedula);
		$consulta->execute();
		$filas = $consulta->get_result();
		/*como es solamente una fila, no necesito while*/
		$mifila=$filas->fetch_assoc();
		echo "<h2>".$mifila['nombre']." ".$mifila['apellido1']." ".$mifila['apellido2']."</h2>";
		echo "Fecha Nacimiento: ".$mifila['fechanacimiento']."<br>";
		echo "Estado Civil: ".$mifila['estadocivil']."<br>";
		echo "Provincia: ".$mifila['provincia']."<br>";
		echo "Cantón: ".$mifila['canton']."<br>";
		echo "Distrito: ".$mifila['distrito']."<br>";
		echo "<hr><a href='ver_detalles.php'>Regresar</a>";
	}else{

		echo "<a href='index.php'>Regresar</a>";
	}
?>