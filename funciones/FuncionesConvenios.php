<?php include '../consultas/conexion.php';
		function consultarConvenios() {
			$conexion=Conexion::getInstance();
			$consulta = "select yearconvenio from convenios group by yearconvenio";
			$registros = $conexion->obtener($consulta);
			while ($reg=mysqli_fetch_assoc($registros)){
				$year=$reg['yearconvenio'];
				echo "<div class=\"card\">";
					echo "<div class=\"card-header\" id=\"heading$year\">";
						//<!-- Título -->"
						echo "<h5 class=\"mb-0\">";
							echo "<button class=\"btn btn-link btn-block\" data-toggle=\"collapse\" data-target=\"#collapse$year\" aria-expanded=\"false\" aria-controls=\"collapse$year\">";
								echo "Convenios interadministrativos suscritos en el año $year";
							echo "</button>";
						echo "</h5>";
						//<!-- /Título -->"
					echo "</div>";
					//<!-- Tabla de convenios -->"
					echo "<div id=\"collapse$year\" class=\"collapse\" aria-labelledby=\"heading$year\" data-parent=\"#accordion\">";
						echo "<div class=\"card-body\">";
							echo "<table class=\"table table-hover\">";
								echo "<thead>";
									echo "<tr>";
										echo "<th scope=\"col\">Convenios</th>";
										echo "<th scope=\"col\">Estado</th>";
										echo "<th scope=\"col\">Contratante</th>";
										echo "<th scope=\"col\">Valor</th>";
										echo "<th scope=\"col\">Duración</th>";
										echo "<th scope=\"col\">Objeto</th>";
									echo "</tr>";
								echo "</thead>";
								echo "<tbody>";
									mostrarConveniosYear($reg['yearconvenio']);
								echo"</body>";
							echo "</table>";
						echo "</div>";
					echo "</div>";
					//<!-- /Tabla de convenios -->"
				echo "</div>";
			}

		}

		function mostrarConveniosYear($year){
			$conexion=Conexion::getInstance();
			$consulta = "select conv.nombreconvenio, conv.estadoconvenio, conv.contratanteconvenio, conv.valorconvenio, conv.duracionconvenio, conv.objetoconvenios from convenios conv where conv.yearconvenio=\"$year\"";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$nombreconv = $reg['nombreconvenio'];
					$estadoconv = $reg['estadoconvenio'];
					$contratanteconv = $reg['contratanteconvenio'];
					$valorconv = $reg['valorconvenio'];
					$duracionconv = $reg['duracionconvenio'];
					$objetoconv= $reg['objetoconvenios'];
					echo "<tr>";
						echo "<td>";
							echo $nombreconv;
						echo "</td>";
						echo "<td>";
							echo $estadoconv;
						echo "</td>";
						echo "<td>";
							echo $contratanteconv;
						echo "</td>";
						echo "<td>";
							echo $valorconv;
						echo "</td>";
						echo "<td>";
							echo $duracionconv;
						echo "</td>";
						echo "<td>";
							echo $objetoconv;
						echo "</td>";
					echo "</tr>";
				}
			}
			else{
				$mensajeConvenios = "No hay convenios actualmente";
				echo "<h3 class=\"text-center text-muted\">".$mensajeConvenios."</h3>";
			}
		}
	?>