<?php
		include '../consultas/conexion.php';
		
		function realizarInscripcionProgAca(){
			
			//Asignación de variables a los name de cada input
			$temp = $_POST['tipoprogaca'];
			$tipoprogaca = explode("$|$|$",$temp);
			$temp = $_POST['estadoprogaca'];
			$estadoprogaca = explode("$|$|$",$temp);
			$nombreprogaca = $_POST['nombreprogaca'];
			$dirigido = $_POST['dirigido'];
			$fechaini = $_POST['fechaini'];
			$fechafin = $_POST['fechafin'];
			$duracion = $_POST['duracion'];
			$desgrande = $_POST['desgrande'];
			$despeq = $_POST['despeq'];
			$codigorecaudo = $_POST['codigorecaudo'];
			$inversion = $_POST['inversion'];
			
			//Se crea la conección y se obtiene el programaacademico a partir del id del programaacademico
			$conexion=Conexion::getInstance();
			
			//Se mira que tipo de programa academico es y se crea la carpeta correspondiente
				if($tipoprogaca[0]=="1"){
					$carpeta = '../Archivos/Cursos/'.$nombreprogaca;
				}else{
					$carpeta = '../Archivos/Diplomados/'.$nombreprogaca;
				}
				//Se crea la carpeta
				if (!file_exists($carpeta)) {
					mkdir($carpeta, 0777, true);
				}
				
				//se obtienen los archivos que se cargaron
				$dirpdf =ingresarArchivo($carpeta,'pdfPA', 'InformaciónPrograma',["application/pdf"]);
				//Ya con todo lo necesario se valida que existan los archivos con el formato adecuado
				if($dirpdf==""){
					Echo"Error en formato de algún archivo";
				}else{
					//si están correctos se pasa a insertar en la base de datos
					$InsercionProgramaacademico = "insert into `programaacademico`(`idtipoprogramaacademico`, `idtipoestado`, `nomprogramaacademico`, `dirigidoprogaca`, `fechainicioprogaca`, `fechafinprogaca`, `duracionprogaca`, `grandescripprogaca`, `peqdescripprogaca`, `pdf`, `codigorecaudo`, `inversion`) VALUES (\"$tipoprogaca[0]\",\"$estadoprogaca[0]\",\"$nombreprogaca\",\"$dirigido\",\"$fechaini\",\"$fechafin\",\"$duracion\",\"$desgrande\",\"$despeq\",\"$dirpdf\",\"$codigorecaudo\",\"$inversion\")";
					$resultadoInsert = $conexion->insertar($InsercionProgramaacademico);
					if($resultadoInsert=='1'){
						echo"<center>Se ha registrado satisfactoriamente el programa academico</center>";
					}else{
						echo"<center>Error en la inserción en la base de datos</center>";
					}
				}

		}
		
		//Función para poder obtener los archivos de forma dinámica
		function ingresarArchivo($carpeta, $namedecarga, $nombrearchivo, $tiposdisponibles){
			$tipoarchivo="";
			//$tiposdisponibles es un arreglo
			foreach($tiposdisponibles as $i){
				if ($_FILES[$namedecarga]['type'] ==$i){
					$tipoarchivo = explode("/",$i)[1];
				break;
				}
			}
			//si no está el tipo en en el arreglo
			if($tipoarchivo==""){
				return "";
			}
			
			$target_path = $carpeta;
			$target_path = $target_path ."/".$nombrearchivo.".".$tipoarchivo; 
			if(move_uploaded_file($_FILES[$namedecarga]['tmp_name'], $target_path)) {
			return $target_path;
			}
		}
?>
