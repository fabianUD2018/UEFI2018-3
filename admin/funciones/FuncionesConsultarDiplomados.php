<?php
		include '../consultas/conexion.php';
		
		function consultardiplomados(){
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
			echo "</tr>";
			//Se consultan todos los convenios
			$conexion=Conexion::getInstance();
			$consulta = "select `idprogramaacademico`, `nomprogramaacademico`, `idtipoestado`, `fechainicioprogaca`, `fechafinprogaca`, `codigorecaudo`, `inversion` from `programaacademico` where `idtipoprogramaacademico`=2 ";
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
					echo "<tr>";
						echo "<td>$idprogramaacademico</td>";
						echo "<td>$nomprogramaacademico</td>";
						//Se cambian los números de id tipoestado a letras 
						if($idtipoestado==1){
							$idtipoestadoLetra="Programación";
						}
						elseif($idtipoestado==2){
							$idtipoestadoLetra="Inscripción";
						}else{
							$idtipoestadoLetra="Dictando";
						}
						echo "<td>$idtipoestadoLetra</td>";
						echo "<td>$fechainicioprogaca</td>";
						echo "<td>$fechafinprogaca</td>";
						echo "<td>$codigorecaudo</td>";
						echo "<td>$inversion</td>";
					echo "</tr>";
				}
				echo "</tbody>";
			echo "</table>";
			}
			else{
				$mensajeDiplomados = "No hay Diplomados en la base de datos";
				echo "<h3 class=\"text-center text-muted\">".$mensajeDiplomados."</h3>";
			}
		 //fin de la funcion
		}

?>
