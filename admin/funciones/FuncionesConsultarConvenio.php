<?php
		include '../consultas/conexion.php';
		
		function consultarConvenios(){
		//Se crea la tabla

		echo "<table class=\"table table-striped table-advance table-hover\">";
		echo "<tbody>";
			//Cabecera de la tabla
			echo "<tr>";
				echo "<th><center><i class=\"fa fa-calendar\"></i><br>Año</center></th>";
				echo "<th><center><i class=\"fa fa-archive\"></i><br>Nombre</center></th>";
				echo "<th><center><i class=\"fa fa-star\"></i><br>Estado</center></th>";
				echo "<th><center><i class=\"fa fa-users\"></i><br>Contratante</center></th>";
				echo "<th><center><i class=\"fa fa-dollar\"></i><br>Valor</center></th>";
				echo "<th><center><i class=\"fa fa-check\"></i><br>Duración</center></th>";
				echo "<th><center><i class=\"fa fa-object-ungroup\"></i><br>Objeto</center></th>";
			echo "</tr>";
			//Se consultan todos los convenios
			$conexion=Conexion::getInstance();
			$consulta = "select `yearconvenio`, `nombreconvenio`, `estadoconvenio`, `contratanteconvenio`, `valorconvenio`, `duracionconvenio`, `objetoconvenios` from `convenios`";
			//Si hay registros se crea una fila por cada registro
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$yearconvenio = $reg['yearconvenio'];
					$nombreconv = $reg['nombreconvenio'];
					$estadoconv = $reg['estadoconvenio'];
					$contratanteconv = $reg['contratanteconvenio'];
					$valorconv = $reg['valorconvenio'];
					$duracionconv = $reg['duracionconvenio'];
					$objetoconv = $reg['objetoconvenios'];
					echo "<tr>";
						echo "<td>$yearconvenio</td>";
						echo "<td>$nombreconv</td>";
						echo "<td>$estadoconv</td>";
						echo "<td>$contratanteconv</td>";
						echo "<td>$valorconv</td>";
						echo "<td>$duracionconv</td>";
						echo "<td>$objetoconv</td>";
					echo "</tr>";
				}
				echo "</tbody>";
			echo "</table>";
			}
			else{
				$mensajeConvenios = "No hay convenios en la base de datos";
				echo "<h3 class=\"text-center text-muted\">".$mensajeConvenios."</h3>";
			}
		 //fin de la funcion
		}

?>
