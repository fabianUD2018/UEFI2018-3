<?php 

	class Conexion {
		private $servidor = 'localhost';
		private $usuario = 'root';
		private $password = '';
		private $baseDatos = 'bduefi';
		private $mensajeError = "Problemas con la conexión";
		private $link;

		//Objeto singleton, el único ejemplar de la clase Conexión (debe ser estático)
		private static $_conexion;

		//El constructor es privado para evitar creación de múltiples conexiones
		private function __construct(){
			$this->conectar();
		}
		//Se evitan múltiples conexiones
		private function __clone(){}
		//Método para acceder al único ejemplar de la clase Conexión, se asegura de que no hayan múltiples ejemplificaciones
			public static function getInstance(){
			if (!(self::$_conexion instanceof self)){
				self::$_conexion = new self();
			}
			return self::$_conexion;
		}
		//Se realiza la conexión con MySQL
		private function conectar(){
			$this->link=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->baseDatos) or
			die($this->mensajeError);
			$this->link -> set_charset("utf8");
		}

		//Create
		public function insertar($consulta){
			$retorno = mysqli_query($this->link,$consulta) or die("Problemas en el insert into:".mysqli_error($this->link));
			return $retorno;
		}
		//Read
		public function obtener($consulta){
			$retorno = mysqli_query($this->link,$consulta) or die("Problemas en el select:".mysqli_error($this->link));
			return $retorno;
		}
		//Update
		public function actualizar($consulta){
			return mysqli_query($this->link,$consulta) or die("Problemas en el update:".mysqli_error($this->link));
		}
		//Delete
		public function eliminar($consulta){
			return mysqli_query($this->link,$consulta) or die("Problemas en el delete:".mysqli_error($this->link));
		}
	}

 ?>