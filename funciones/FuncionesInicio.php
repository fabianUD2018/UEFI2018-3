<?php include '../consultas/conexion.php';
		function consultarImagenesSlider() {
			$conexion=Conexion::getInstance();
			$consulta = "select  nombreimg,direccionimg from imagen where idtipoimagen=1";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			
			//<!-- Carrousel -->
			echo "<div id=\"news\" class=\"col-md-8 carousel slide\" data-ride=\"carousel\">";
				if ($numeroRegistros!=0) {
				//<!-- Indicators -->
					echo "<ul class=\"carousel-indicators\">";
					$contador=0;
					echo "<li data-target=\"#news\" data-slide-to=\"$contador\"class=\"active\" </li>";
					$contador=$contador+1;
					while ($contador<$numeroRegistros){
						echo "<li data-target=\"#news\" data-slide-to=\"$contador\" </li>";
						$contador=$contador+1;
					}
					echo"</ul>";
				}
				//<!-- /Indicators -->
				//<!-- The slideshow -->	
				echo "<div class=\"carousel-inner\">";

				if ($numeroRegistros!=0) {
					$contador=0;	
					while($reg=mysqli_fetch_assoc($registros)){
						$nombreimg = $reg['nombreimg'];
						$direccionimg = $reg['direccionimg'];
						if($contador==0){
							echo "<div class=\"carousel-item active\">";
							echo "<img src=\"../$direccionimg\" class=\"img-fluid rounded mx-auto d-block\" alt=\"$nombreimg\">";
							echo "</div>";
							$contador=1;
						}else{
							echo "<div class=\"carousel-item\">";
							echo "<img src=\"../$direccionimg\" class=\"img-fluid rounded mx-auto d-block\" alt=\"$nombreimg\">";
							echo "</div>";
						}					
				}
				echo"</div>";
				//<!-- /The slideshow -->
				//<!-- Left and right controls -->
				echo"<a class=\"carousel-control-prev\" href=\"#news\" data-slide=\"prev\">";
					echo"<span class=\"carousel-control-prev-icon\"></span>";
				echo"</a>";
				echo"<a class=\"carousel-control-next\" href=\"#news\" data-slide=\"next\">";
				echo"<span class=\"carousel-control-next-icon\"></span>";
				echo"</a>";
				//<!-- /Left and right controls -->
			echo"</div>";
			//<!-- /Carrousel -->
			}			
		}

		function consultarImagenesProgramaAcademico() {
			$conexion=Conexion::getInstance();
			$consulta = "select pa.idprogramaacademico, pa.nomprogramaacademico, pa.peqdescripprogaca, img.direccionimg FROM programaacademico pa, imagen img , imgprogaca_progaca imgpa WHERE pa. idtipoestado=2 and imgpa.idimagen=img.idimagen and imgpa.idprogramaacademico=pa.idprogramaacademico and img.idtipoimagen=3 ORDER BY pa.fechainicioprogaca LIMIT 0, 2";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);

			echo"<div class=\"col-md-4\">";
			if ($numeroRegistros!=0) {
				$contador=0;
				while($reg=mysqli_fetch_assoc($registros)){
					$contador=$contador+1;
					$idprogramaacademico = $reg['idprogramaacademico'];
					$nomprogramaacademico = $reg['nomprogramaacademico'];
					$peqdescripprogaca = $reg['peqdescripprogaca'];
					$direccionimg = $reg['direccionimg'];
					echo"<figure class=\"imghvr-fold-up\">";
						echo"<img src=\"../$direccionimg\" class=\"img-responsive\">";
							echo"<figcaption>";
								echo"<h5>$nomprogramaacademico</h5>";
								echo"<p>$peqdescripprogaca</p>";
							echo"</figcaption>";
						echo"<a href=\"..inscripcion\"></a>";
					echo"</figure>";
				}
			}else{
				echo"<figureclass=\"imghvr-fold-up\">";
					echo"<img src=\"../img/Imagen_no_disponible1.png\" class=\"img-responsive\">";
					echo"<figcaption>";
								echo"<h5>Gracias por visitar la página de la Unidad de Extensión de la Facultad de Ingeniería de la Universidad Fráncisco José de Caldas</h5>";
					echo"</figcaption>";
				echo"</figure>";
				echo"<figure class=\"imghvr-fold-up\">";
					echo"<img src=\"../img/Imagen_no_disponible1.png\" class=\"img-responsive\">";
					echo"<figcaption>";
								echo"<h5>Gracias por visitar la página de la Unidad de Extensión de la Facultad de Ingeniería de la Universidad Fráncisco José de Caldas</h5>";
					echo"</figcaption>";
				echo"</figure>";
			}
			if($contador==1){
				echo"<figure class=\"imghvr-fold-up\">";
					echo"<img src=\"../img/Imagen_no_disponible1.png\" class=\"img-responsive\">";
					echo"<figcaption>";
								echo"<h5>Gracias por visitar la página de la Unidad de Extensión de la Facultad de Ingeniería de la Universidad Fráncisco José de Caldas</h5>";
					echo"</figcaption>";
				echo"</figure>";
			}
			echo"</div>";

		}

<<<<<<< HEAD
		

=======
>>>>>>> bf2bbcbdf8cec01c8fc79f6244887ca89c397ef3
?>