<?php
		include '../consultas/conexion.php';
		
		function realizarRegistroConvenio(){
			
			//Asignación de variables a los name de cada input
			$temp = $_POST['yearconvenio'];
			$yearconvenio = explode("$|$|$",$temp);
			$nombreconvenio = $_POST['nombreconvenio'];
			$estadoconvenio = $_POST['estadoconvenio'];
			$contratanteconvenio = $_POST['contratanteconvenio'];
			$valorconvenio = $_POST['valorconvenio'];
			$duracionconvenio = $_POST['duracionconvenio'];
			$objetoconvenio = $_POST['objetoconvenio'];
			
			//Se crea la conección y se obtiene el programaacademico a partir del id del programaacademico
			$conexion=Conexion::getInstance();
				
			//si están correctos se pasa a insertar en la base de datos
				$InsercionConvenio = "insert into `convenios`(`yearconvenio`, `nombreconvenio`, `estadoconvenio`, `contratanteconvenio`, `valorconvenio`, `duracionconvenio`, `objetoconvenios`) VALUES (\"$yearconvenio[0]\",\"$nombreconvenio\",\"$estadoconvenio\",\"$contratanteconvenio\",\"$valorconvenio\",\"$duracionconvenio\",\"$objetoconvenio\")";
				$resultadoInsert = $conexion->insertar($InsercionConvenio);
				if($resultadoInsert=='1'){
					echo"<center>Se ha registrado satisfactoriamente el Convenio</center>";
				}else{
					echo"<center>Error en la inserción en la base de datos</center>";
				}
		}
?>
