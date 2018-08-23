<?php include '../consultas/conexion.php';
		function obtenerId() {
			$conexion=Conexion::getInstance();
			$consulta = "select pa.idprogramaacademico from programaacademico pa";
			$registros = $conexion->obtener($consulta);
			while ($reg=mysqli_fetch_assoc($registros)){
				if(isset($_POST[$reg['idprogramaacademico']])){
					return $reg['idprogramaacademico'];
				}
			}
			return -1;
		}
		function generarPagina($id) {
			$conexion=Conexion::getInstance();

			$consulta = "select te.nombretipoestado, pa.nomprogramaacademico, pa.dirigidoprogaca, pa.fechainicioprogaca, pa.fechafinprogaca, pa.duracionprogaca, pa.grandescripprogaca, pa.peqdescripprogaca, pa.codigorecaudo, pa.inversion from programaacademico pa, tipoestado te where pa.idprogramaacademico=\"$id\" and pa.idtipoestado= te.idtipoestado";
			$registro = mysqli_fetch_assoc($conexion->obtener($consulta));//Se sabe que será siempre un solo registro obtenido
			$estado = $registro['nombretipoestado'];
			$nombre = $registro['nomprogramaacademico'];
			$dirigido = $registro['dirigidoprogaca'];
			$fechaI = $registro['fechainicioprogaca'];
			$fechaF = $registro['fechafinprogaca'];
			$duracion = $registro['duracionprogaca'];
			$granDesc = $registro['grandescripprogaca'];
			$peqDesc = $registro['peqdescripprogaca'];
			$codigo = $registro['codigorecaudo'];
			$inversion = $registro['inversion'];
			echo "<div class=\"container\">";
				echo "<div class=\"row pt-4\">";
					echo "<!-- Nombre del curso -->";
					echo "<div class=\"col-md-8\">";
						echo "<h3 class=\"section-title text-center\">$nombre</h3>";
						echo "<div class=\"section-title-divider\"></div>";
					echo "</div>";
					echo "<!-- /Nombre del curso -->";
					echo "<!-- Tab -->";
					echo "<div class=\"col-md-8\">";
						echo "<ul class=\"nav nav-tabs\" role=\"tablist\">";
							echo "<li class=\"nav-item\">";
								echo "<a class=\"nav-link active\" href=\"#Dirigido\" role=\"tab\" data-toggle=\"tab\">Dirigido a</a>\"";
							echo "</li>";
							echo "<li class=\"nav-item\">";
								echo "<a class=\"nav-link\" href=\"#Fecha\" role=\"tab\" data-toggle=\"tab\">Fecha y duración</a>";
							echo "</li>";
							echo "<li class=\"nav-item\">";
								echo "<a class=\"nav-link\" href=\"#Descripcion\" role=\"tab\" data-toggle=\"tab\">Descripción</a>";
							echo "</li>";
							echo "<li class=\"nav-item\">";
								echo "<a class=\"nav-link\" href=\"#Inversion\" role=\"tab\" data-toggle=\"tab\">Inversión</a>";
							echo "</li>";
						echo "</ul>";
						echo "<!-- Tab panes -->";
						echo "<div class=\"tab-content\">";
							echo "<div role=\"tabpanel\" class=\"tab-pane in active\" id=\"Dirigido\">";						
								echo $dirigido;
							echo "</div>";
							echo "<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Fecha\">";
								echo "<p>Fecha de inicio: $fechaI</p>";
								echo "<p>Fecha de terminación: $fechaF</p>";
								echo "<p>Duración estimada: $duracion</p>";
							echo "</div>";
							echo "<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Descripcion\">";
								echo $granDesc;
							echo "</div>";
							echo "<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Inversion\">";
								echo "<p>Código de recaudo: $codigo</p>";
								echo "<p>Valor de inscripción: $inversion</p>";
							echo "</div>";
						echo "</div>";
						echo "<!-- Tab panes -->";
					echo "</div>";
					echo "<!-- /Tab -->";
					echo "<div class=\"col-md-4 pt-5\">";
						echo "<!-- Imagen -->";
						echo "<div class=\"row pt-3\">";
							echo "<div class=\"col\">";
								echo "<img src=\"../img/portfolio-7.jpg\" alt=\"\">";
							echo "</div>";
						echo "</div>";
						echo "<!-- /Imagen -->";
						echo "<div class=\"row pt-3\">";
							echo "<!-- Thumbnail -->";
							echo "<div class=\"thumbnail\">";
								echo "<div class=\"caption\">";
									echo "<p class=\"text-secondary\">$peqDesc</p>";
									echo "<p>Estado: $estado</p>";
									echo "<p class=\"text-secondary\"><center><a href=\"../page/inscripcion.php\" class=\"btn btn-primary\">Inscribirse</a></center></p>";
									echo "<p class=\"text-secondary\"><center><a href=\"../page/Programa_Especifico.php\" class=\"btn btn-primary\">Ver más</a></center></p>";
								echo "</div>";
							echo "</div>";
							echo "<!-- /Thumbnail -->";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}
?>