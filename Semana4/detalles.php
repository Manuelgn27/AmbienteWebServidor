<h1 align='center'>Detalles Citas Medicas</h1>
<?php /*detalles.php*/
	$db=new mysqli("localhost","admin","12345","citas_medicas");

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$consulta=$db->prepare//para pasar el parametro que quiero que busque
		("Select * From citas Where id=?");
		$consulta->bind_param("i",$id);
		$consulta->execute();
		$filas = $consulta->get_result();
		/*como es solamente una fila, no necesito while*/
		$mifila=$filas->fetch_assoc();
		echo "<h2>".$mifila['paciente']."</h2>";
		echo "Medico: ".$mifila['medico']."<br>";
		echo "Fecha Cita: ".$mifila['fechacita']."<br>";
		echo "Costo: ".$mifila['costo']."<br>";
		echo "Sucursal: ".$mifila['sucursal']."<br>";
		echo "<hr><a href='ver_detalles.php'>Regresar</a>";
	}else{

		echo "<a href='index.php'>Regresar</a>";
	}
?>