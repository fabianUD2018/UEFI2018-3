<?php
		include '../consultas/conexion.php';
		function mostrarnombreprogaca($tipoProgAca){
			$conexion=Conexion::getInstance();
			$consulta = "select idprogramaacademico, nomprogramaacademico from programaacademico where idtipoprogramaacademico=\"$tipoProgAca\"";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$idcurso = $reg['idprogramaacademico'];
					$nombrecurso = $reg['nomprogramaacademico'];
					echo "<option value=\"$idcurso$|$|$$nombrecurso\">$nombrecurso</option>";
				}
			}
			else{
				$mensajeCursos = "No hay cursos actualmente";
				
			}
		}
		function realizarInscripcion(){
			
			//Asignación de variables a los name de cada input
			$idformapago = "1";//Debido a que solo hay pago físico, cambia cuando se agregue la funcionalidad de pago electrónico
			$temp = $_POST[$_POST['radioprogaca']];
			$idprogacademico = explode("$|$|$",$temp);
			$nombreprogaca= $idprogacademico[1];
			date_default_timezone_set("America/Bogota");
			$horainscripcion = date('G:i:s');
			$fechahorainscripcion=date("Y-m-d");
			$nombreinscrito = $_POST['nombre'];
			$apellidoinscrito = $_POST['apellido'];
			$temp = $_POST['tipoDocumento'];
			$idtipodocumento = explode("$|$|$",$temp);
			$numerodocumento = $_POST['numeroDocumento'];
			$lugarexpedicion = $_POST['lugarExpedicion'];
			$fechaNacimiento = $_POST['fechaNacimiento'];
			$lugarnacimiento = $_POST['lugarNacimiento'];
			$direccionhogar = $_POST['direccionHogar'];
			$direccionoficina = $_POST['direccionOficina'];
			$telefonohogar = $_POST['telefonoHogar'];
			$telefonooficina = $_POST['inputteloficina'];
			$telefonocelular = $_POST['inputtelcelular'];
			$email = $_POST['inputemail'];
			$profesion = $_POST['profesion'];
			
			//Se crea la conección y se obtiene el programaacademico a partir del id del programaacademico
			$conexion=Conexion::getInstance();
			$ConsutoaTipoProgAca = "select pa.`idtipoprogramaacademico` FROM `programaacademico` pa WHERE `idprogramaacademico`=\"$idprogacademico[0]\"";
			$registroidtipo = $conexion->obtener($ConsutoaTipoProgAca);
			$regtipoprogaca=mysqli_fetch_assoc($registroidtipo);
			//se consulta que la persona no este en la bd con el mismo programa academico
			$consulta = "select numerodocumento from personainscrita where numerodocumento=\"$numerodocumento\" and idprogramaacademico=\"$idprogacademico[0]\" and idtipodocumento=\"$idtipodocumento[0]\"";
			$registros = $conexion->obtener($consulta);
			$existe = mysqli_num_rows($registros);	
			//no exista una personas en el mismo curso
			if ($existe ==0) {
				//Se revisa que la carpeta del tipo programa academico no esté
				if($regtipoprogaca['idtipoprogramaacademico']=='1'){
					$carpeta = '../Archivos/Cursos/'.$nombreprogaca.'/Inscritos';
				}else{
					$carpeta = '../Archivos/Diplomados/'.$nombreprogaca.'/Inscritos';
				}
				//Se crea la carpeta
				if (!file_exists($carpeta)) {
					mkdir($carpeta, 0777, true);
				}
				//Se crea la carpeta de la persona con su número de documento
				$carpeta=$carpeta.'/'.$numerodocumento;
				if (!file_exists($carpeta)) {
					mkdir($carpeta, 0777, true);
				}
				//se obtienen los archivos que se cargaron
				$dirfotoinscrito = ingresarArchivo($carpeta,'fotocargada', 'foto3x4',["image/jpeg","image/png"]);
				$dirhojavida =ingresarArchivo($carpeta,'hvcargada', 'hojaVida',["application/pdf"]);
				$dirfotocedula = ingresarArchivo($carpeta,'cedulacargada', 'cedula',["application/pdf","image/png","image/jpeg"]);
				$dirfotocarneseguro =ingresarArchivo($carpeta,'carnesegurocargado', 'carneSeguro',["application/pdf","image/png","image/jpeg"]);
				$dirfotoconsignacion =ingresarArchivo($carpeta,'consignacioncargado', 'consignacion',["application/pdf","image/png","image/jpeg"]);
				//Ya con todo lo necesario se valida que existan los archivos con el formato adecuado
				if($dirfotoinscrito=="" OR $dirhojavida=="" OR $dirfotocedula=="" or $dirfotocarneseguro=="" or $dirfotoconsignacion=="" ){
					Echo"Error en formato de algún archivo";
				}else{
					//si están correctos se pasa a insertar en la base de datos
					$InsercionPersona = "insert into `personainscrita`(`idtipodocumento`, `idformapago`, `idprogramaacademico`, `fechahorainscripcion`, `horainscripcion`, `nombreinscrito`, `apellidoinscrito`, `numerodocumento`, `lugarexpedicion`, `fechanacimiento`, `lugarnacimiento`, `direccionhogar`, `direccionoficina`, `telefonohogar`, `telefonooficina`, `telefonocelular`, `email`, `profesion`, `dirfotoinscrito`, `dirhojavida`, `dirfotocedula`, `dirfotocarneseguro`, `dirfotoconsignacion`) VALUES (\"$idtipodocumento[0]\",\"$idformapago\",\"$idprogacademico[0]\",\"$fechahorainscripcion\",\"$horainscripcion\",\"$nombreinscrito\",\"$apellidoinscrito\",\"$numerodocumento\",\"$lugarexpedicion\",\"$fechaNacimiento\",\"$lugarnacimiento\",\"$direccionhogar\",\"$direccionoficina\",\"$telefonohogar\",\"$telefonooficina\",\"$telefonooficina\",\"$email\",\"$profesion\",\"$dirfotoinscrito\",\"$dirhojavida\",\"$dirfotocedula\",\"$dirfotocarneseguro\",\"$dirfotoconsignacion\")";
					$resultadoInsert = $conexion->insertar($InsercionPersona);
					if($resultadoInsert=='1'){
						echo"<center>Se ha registrado satisfactoriamente</center>";
					}else{
						echo"<center>Error en la insersión en la base de datos</center>";
					}
				}
			}else{
				//si la persona ya está inscrita muestra un error
				echo"Ya está Incrita la persona en este Programa Académico";
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
