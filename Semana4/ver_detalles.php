<?php 
	echo "<h1 align='center';>Primer Parcial</h1>";

	$db=new mysqli("localhost","admin","12345","citas_medicas");

	//Consulta
	$sql="Select * From citas";
	$consulta=$db->query($sql);
	if ($consulta===FALSE) {
		echo "<h2>Error: ".$db->error."</h2>";
	}

	echo "<h1 align='center'>Detalles de los Elementos</h1>";

	//Tabla #1
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='100'; bgcolor='blue';>ID</th>";  
	echo "<th width='100'; bgcolor='blue'>Paciente</th>"; 
	echo "</tr>";  

	while ($fila=$consulta->fetch_assoc()) {  

		$link="detalles.php?id=".$fila['id'];//se va pasar parametro de cedula
		$paciente=$fila['paciente'];//Navegador pase la cedula pero se visualice el nombre
		//echo "<a href='$link'>$paciente</a><br>";

	    echo "<tr>";  
	    echo "<td align='center';>".$fila['id']."</td>";
	    echo "<td align='center';>"."<a href='$link'>$paciente</a><br>"."</td>";
	    echo "</tr>";   
	}  
	echo "</table>";

	//Tabla #2
	echo "<br>";
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='100'; bgcolor='gray';>Cita</th>";
	echo "<th width='100'; bgcolor='gray'>Regresar</th>"; 
	echo "</tr>";   
	
	echo "<tr>";    
    echo "<td align='center';>"."<a href='crear.php'>Incluir</a>"."</td>";
    echo "<td align='center';>"."<a href='index.php'>Regresar</a>"."</td>";
    echo "</tr>";  
	echo "</table>";

	echo "<br>";

	$db->close();
?>