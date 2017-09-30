<?php 
	echo "<h1 align='center';>Tarea #3</h1>";

	$db=new mysqli("localhost","admin","12345","citas_medicas");

	//Consulta
	$sql="Select * From citas";
	$consulta=$db->query($sql);
	if ($consulta===FALSE) {
		echo "<h2>Error: ".$db->error."</h2>";
	}

	echo "<h1 align='center'>Elementos de la Base de Datos</h1>";

	//Tabla #1
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='100'; bgcolor='blue';>ID</th>";  
	echo "<th width='100'; bgcolor='blue'>Paciente</th>";  
	echo "<th width='100'; bgcolor='blue'>Medico</th>"; 
	echo "<th width='100'; bgcolor='blue'>Fecha Cita</th>"; 
	echo "<th width='100'; bgcolor='blue'>Costo</th>"; 
	echo "<th width='100'; bgcolor='blue'>Sucursal</th>"; 
	echo "</tr>";  

	while ($fila=$consulta->fetch_assoc()) {  

	    echo "<tr>";  
	    echo "<td align='center';>".$fila['id']."</td>";
	    echo "<td align='center';>".$fila['paciente']."</td>";
	    echo "<td align='center';>".$fila['medico']."</td>";
	    echo "<td align='center';>".$fila['fechacita']."</td>";
	    echo "<td align='center';>".$fila['costo']."</td>";
	    echo "<td align='center';>".$fila['sucursal']."</td>";
	    echo "</tr>";  

	    
	}  
	echo "</table>";

	//Tabla #2
	echo "<br>";
	echo "<table border='1'; align='center';>";  
	echo "<tr>";  
	echo "<th width='100'; bgcolor='gray';>Cita</th>";  
	echo "<th width='100'; bgcolor='gray'>Ver Detalles</th>"; 
	echo "</tr>";   
	
	echo "<tr>";    
    echo "<td align='center';>"."<a href='crear.php'>Incluir</a>"."</td>";
    echo "<td align='center';>"."<a href='ver_detalles.php'>Ver Detalles</a>"."</td>";
    echo "</tr>";  
	echo "</table>";

	echo "<br>";

	/*echo "Hola";

	//Recorremos el conjunto de filas
	while ($fila=$consulta->fetch_assoc()) {

		//Toma la siguiente fila y pone los datos en un arreglo
		echo "ID: ".$fila['id']."<br>"."Paciente: ".$fila['paciente']."<br>"."Medico: ".$fila['medico']."<br>"."Fecha Cita: ".$fila['fechacita']."<br>"."Costo: ".$fila['costo']."<br>"."Sucursal: ".$fila['sucursal']."<br>";
		echo "<br>";
		echo "Hola";

		
		$link="detalles.php?id=".$fila['id'];//se va pasar parametro de cedula
		$medico=$fila['medico'];//Navegador pase la cedula pero se visualice el nombre
		echo "<a href='$link'>$medico</a><br>";
		echo "<br>";

		
	}*/
	$db->close();
?>