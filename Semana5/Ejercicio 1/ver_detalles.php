<?php 
	echo "<h1 align='center';>Examen #1</h1>";

	$db=new mysqli("localhost","admin","12345","registro_civil");

	//Consulta
	$sql="Select * From personas";
	$consulta=$db->query($sql);
	if ($consulta===FALSE) {
		echo "<h2>Error: ".$db->error."</h2>";
	}

	echo "<h1 align='center'>Detalles de las Personas</h1>";

	//Tabla #1
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='100'; bgcolor='blue';>Cédula</th>";  
	echo "<th width='200'; bgcolor='blue';>Nombre</th>"; 
	echo "</tr>";  

	while ($fila=$consulta->fetch_assoc()) {  

		$link="detalles.php?cedula=".$fila['cedula'];//se va pasar parametro de cedula
		$nc=$nombre=$fila['nombre']." ".$apellido1=$fila['apellido1']." ".$apellido2=$fila['apellido2'];//Navegador pase la cedula pero se visualice el nombre

	    echo "<tr>";  
	    echo "<td align='center';>".$fila['cedula']."</td>";
	    echo "<td align='center';>"."<a href='$link'>$nc</a><br>"."</td>";
	    echo "</tr>";   
	}  
	echo "</table>";

	//Tabla #2
	echo "<br>";
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='200'; bgcolor='gray';>Registrar Persona</th>";
	echo "<hr>";
	echo "<th width='200'; bgcolor='gray';>Regresar</th>"; 
	echo "</tr>";   
	
	echo "<tr>";    
    echo "<td align='center';>"."<a href='crear.php'>Incluir</a>"."</td>";
    echo "<td align='center';>"."<a href='index.php'>Regresar</a>"."</td>";
    echo "</tr>";  
	echo "</table>";

	echo "<br>";

	$db->close();
?>