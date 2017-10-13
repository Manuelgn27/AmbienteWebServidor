<?php /*clase.php*/ 
	
	require("persona.php");

	if (isset($_POST['cedula'])) {

		$cedula=$_POST['cedula'];
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];

		$nuevo=new Persona($cedula,$nombre,$apellidos);
		$nuevo->agregarpersona($cedula,$nombre,$apellidos);

		//$nuevo=new Persona();
		$nuevo->cargarpersona();

	}else{

		echo "No cargo nada";
	}
?>