<?php 

	class Conexion{

		public $host="localhost";
		public $usuario="admin";
		public $pass="12345";
		public $bd="personas";

		public function conectarbd(){

			$db=new mysqli($this->host,$this->usuario,$this->pass,$this->bd);
			if ($db->connect_errno) {
				echo "Fallo al conectar a MySQL: ". $db->connect_errno;
			}else{
				return $db;
			}
			$db->set_charset('utf8');
		}
		
	}
?>