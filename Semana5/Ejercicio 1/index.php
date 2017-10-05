<?php 
	echo "<h1 align='center';>Examen #1</h1>";

	$db=new mysqli("localhost","admin","12345","registro_civil");

	//Consulta
	$sql="Select * From personas";
	$consulta=$db->query($sql);
	if ($consulta===FALSE) {
		echo "<h2>Error: ".$db->error."</h2>";
	}

	echo "<h1 align='center'>Registro Civil</h1>";

	//Tabla #1
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='100'; bgcolor='blue';>Cédula</th>";  
	echo "<th width='100'; bgcolor='blue'>Nombre</th>";  
	echo "<th width='100'; bgcolor='blue'>Apellido 1</th>"; 
	echo "<th width='100'; bgcolor='blue'>Apellido 2</th>"; 
	echo "<th width='100'; bgcolor='blue'>Fecha Nacimiento</th>"; 
	echo "<th width='100'; bgcolor='blue'>Estado Civil</th>"; 
	echo "<th width='100'; bgcolor='blue'>Provincia</th>"; 
	echo "<th width='100'; bgcolor='blue'>Cantón</th>"; 
	echo "<th width='100'; bgcolor='blue'>Distrito</th>"; 
	echo "</tr>";  

	while ($fila=$consulta->fetch_assoc()) {  

	    echo "<tr>";  
	    echo "<td align='center';>".$fila['cedula']."</td>";
	    echo "<td align='center';>".$fila['nombre']."</td>";
	    echo "<td align='center';>".$fila['apellido1']."</td>";
	    echo "<td align='center';>".$fila['apellido2']."</td>";
	    echo "<td align='center';>".$fila['fechanacimiento']."</td>";
	    echo "<td align='center';>".$fila['estadocivil']."</td>";
	    echo "<td align='center';>".$fila['provincia']."</td>";
	    echo "<td align='center';>".$fila['canton']."</td>";
	    echo "<td align='center';>".$fila['distrito']."</td>";
	    echo "</tr>";  

	    
	}  
	echo "</table>";

	//Tabla #2
	echo "<br>";
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='200'; bgcolor='gray';>Registrar Persona</th>";  
	echo "<th width='200'; bgcolor='gray':>Ver Detalles</th>"; 
	echo "</tr>";   
	
	echo "<tr>";    
    echo "<td align='center';>"."<a href='crear.php'>Incluir</a>"."</td>";
    echo "<td align='center';>"."<a href='ver_detalles.php'>Ver Detalles</a>"."</td>";
    echo "</tr>";  
	echo "</table>";

	echo "<br>";
	
	$db->close();
?>