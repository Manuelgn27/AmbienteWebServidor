<?php 
require("conexion.php");

class Persona {

	/*Propiedades o Atributos*/
	public $cedula;
	public $nombre;
	public $apellidos;
	public $listapersonas;
	

	/*Constructor*/
	function __construct($cedula,$nombre,$apellidos){

		$this->cedula=$cedula;
		$this->nombre=$nombre;
		$this->apellidos=$apellidos;
		$this->listapersonas=[];
		
	}

	function agregarpersona($cedula,$nombre,$apellidos){

		$datos=new conexion();
		$db=$datos->conectarbd();

		$consulta=$db->prepare
		("Insert into tb_persona (cedula, nombre, apellidos) values(?,?,?)");
		$consulta->bind_param("sss",$cedula, $nombre, $apellidos); 

		$consulta->execute();
		if ($consulta->affected_rows>0) {
			echo "<h2>Insercion exitosa</h2>";
			echo "<hr>";
			echo "<a href='index.html'>Regresar</a>";
		}
		else{

			echo "<h2>Fallo al insertar</h2>";
			echo "<h3>".$con->error."</h3>";
			echo "<hr>";
			echo "<a href='index.html'>Regresar</a>";
		}
		$db->close();
	}

	function cargarpersona(){

		$datos=new conexion();
		$db=$datos->conectarbd();

		$sql="Select * From tb_persona";
		$consulta=$db->query($sql);
		if ($consulta===FALSE) {
			echo "<h2>Error: ".$db->error."</h2>";
		}

		echo "<h1 align='center'>Información de Personas</h1>";

		//Tabla #1
		echo "<table border='1'; align='center';>";  
		echo "<tr>";  
		echo "<th width='100'; bgcolor='blue';>Cedula</th>";  
		echo "<th width='100'; bgcolor='blue'>Nombre</th>"; 
		echo "</tr>";  

		while ($fila=$consulta->fetch_assoc()) {  

		    echo "<tr>";  
		    echo "<td align='center';>".$fila['cedula']."</td>";
		    echo "<td align='center';>".$fila['nombre']." ".$fila['apellidos']."</td>";
		    echo "</tr>";   
		}  
		echo "</table>";
		$db->close();
	}
}

?>