<?php
		include '../consultas/conexion.php';
		
		function consultarcursos(){
		//Se mantienen los botones
		//echo "<div class=\"container\">";
		//	echo "<div class=\"row d-flex justify-content-center\">";
		//		echo "<div class=\"col-six\">";
		//			echo "<form method=\"post\" action=\"RespuestaConsultaCursos.php\" enctype=\"multipart/form-data\">";
		//				echo "<button type=\"button\" class=\"btn btn-primary btn-lg\">Consultar Cursos</button>";
		//			echo "</form>";
		//		echo "</div>";
		//		echo "<div class=\"col-six\">";
		//			echo "<form method=\"post\" action=\"RespuestaConsultaDiplomados.php\" enctype=\"multipart/form-data\">";
		//				echo "<button type=\"button\" class=\"btn btn-secondary btn-lg\">Consultar Diplomados</button>";
		//			echo "</form>";
		//		echo "</div>";
		//	echo "</div>";
		//echo "</div>";
		//echo "<br>";

		//Se crea la tabla

		echo "<table class=\"table table-striped table-advance table-hover\">";
		echo "<tbody>";
			//Cabecera de la tabla
			echo "<tr>";
				echo "<th><center><i class=\"fa fa-id-badge\"></i><br>id</center></th>";
				echo "<th><center><i class=\"fa fa-archive\"></i><br>Nombre</center></th>";
				echo "<th><center><i class=\"fa fa-star\"></i><br>Estado</center></th>";
				echo "<th><center><i class=\"fa fa-calendar\"></i><br>Fecha Inicio</center></th>";
				echo "<th><center><i class=\"fa fa-times\"></i><br>Fecha Fin</center></th>";
				echo "<th><center><i class=\"fa fa-check\"></i><br>Codigo Recaudo</center></th>";
				echo "<th><center><i class=\"fa fa-dollar\"></i><br>Inversión</center></th>";
				echo "<th><center><i class=\"fa fa-bookmark\"></i><br>Actualizar</center></th>";
			echo "</tr>";
			//Se consultan todos los convenios
			$conexion=Conexion::getInstance();
			$consulta = "select `idprogramaacademico`, `nomprogramaacademico`, `idtipoestado`, `fechainicioprogaca`, `fechafinprogaca`, `codigorecaudo`, `inversion` from `programaacademico` where `idtipoprogramaacademico`=1 ";
			//Si hay registros se crea una fila por cada registro
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$idprogramaacademico = $reg['idprogramaacademico'];
					$nomprogramaacademico = $reg['nomprogramaacademico'];
					$idtipoestado = $reg['idtipoestado'];
					$fechainicioprogaca = $reg['fechainicioprogaca'];
					$fechafinprogaca = $reg['fechafinprogaca'];
					$codigorecaudo = $reg['codigorecaudo'];
					$inversion = $reg['inversion'];
					echo '<form class="form-inline" method="post" action="./actualizarconvenio.php" enctype="multipart/form-data">';
					echo "<tr>";
						echo "<td><input type='text' name= 'id' value ='$idprogramaacademico' readonly ='true'></td>";
						echo "<td ><input type ='text' name ='nombrePrograAca' value= '$nomprogramaacademico'></input></td>";
						//Se cambian los números de id tipoestado a letras 
						if($idtipoestado==1){
							$idtipoestadoLetra="Programación";
						}
						elseif($idtipoestado==2){
							$idtipoestadoLetra="Inscripción";
						}else{
							$idtipoestadoLetra="Dictando";
						}
						echo "<td contenteditable='true'>$idtipoestadoLetra</td>";
						echo "<td ><input type='date'  name = 'fechaIni' value ='$fechainicioprogaca'></input></td>";
						echo "<td ><input type='date'  name = 'fechaFin' value ='$fechafinprogaca'></input></td>";
						echo "<td contenteditable='true'><input type='text' name ='codrecaudo' value='$codigorecaudo'> </input></td>";
						echo "<td contenteditable='true'><input type='text' name ='inversion' value='$inversion'> </input></td>";
						echo "<td><input type='submit' value ='Actualizar'></button></td>";
					echo "</tr>";
					echo "</form>";
				}
				echo "</tbody>";
			echo "</table>";
			}
			else{
				$mensajeCursos = "No hay Cursos en la base de datos";
				echo "<h3 class=\"text-center text-muted\">".$mensajeCursos."</h3>";
			}
		 //fin de la funcion
		}

?>
