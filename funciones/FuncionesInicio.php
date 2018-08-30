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

		//<!-- Nuevooooo -->

		function animacion(){
			//Ancho en pixeles
			$sliderWidth="1080px";
			//Alto en pixeles
			$sliderHeight="200px";
			//Velocidad
			$sliderSpeed=1
			//Color de fondo
			$sliderBgColor="#000000";

			//Imagenes
			$leftrightSlide = new Array();
			$finalSlide='';

			$leftrightSlide[0]='<a href="" title="prueba"><img border="0" src="https://imagenmix.net/wp-content/uploads/2016/10/imagenes-con-frase-positiva.png" height="200"></a>';
			$leftrightSlide[1]='<a href="" title="prueba"><img border="0" src="https://imagenmix.net/wp-content/uploads/2016/10/imagenes-con-frase-positiva.png" height="200"></a>';

			$imageGap = "";
			$sliderShowGap=5;	// Numero de imagenes a mostrar

			$copySpeed = $sliderSpeed;
			$leftrightSlide = '<nobr>' + $leftrightSlide.join($imageGap) + '<nobr>';
			$iedom = document.all || document.getElementById
			if($iedom)
				document.write('<span id="temp" style="visibility:hidden; position:absolute; top:-100px; left:-9000px">' + $leftrightSlide + '</span>')
			$actualWidth='';
			$cross_slide,$ns_slide;
		}

		function fillup(){
			if($iedom){
				$cross_slide= document.getElementById? document.getElementById("test2") : document.all.test2;
				$cross_slide= document.getElementById? document.getElementById("test3") : document.all.test3;
				$cross_slide.innerHTML = $cross_slide2.innerHTML = $leftrightSlide;
				$actualWidth = document.all? $cross_slide.offsetWidth : document.getElementById("temp").offsetWidth;
				$cross_slide2.style.left = $actualWidth + $sliderShowGap + "px"
			}
			else if(document.layers){
				$ns_slide = document.ns_slidemenu.document.ns_slidemenu2
				$ns_slide2 = document.ns_slidemenu.document.ns_slidemenu3
				$ns_slide = document.write($leftrightSlide);
				$ns_slide = document.close();
				$actualWidth = $ns_slide.document.width
				$ns_slide2.left = $actualWidth + $sliderShowGap;
				$ns_slide2.document.write($leftrightSlide);
				$ns_slide2.document.close()
			}
			$leftTime = setInterval("slideleft()",30)
		}
		window.onload=fillup()

		function slideleft(){
			if($iedom){
				if(parseInt($cross_slide.style.left) > ($actualWidth * (-1) + 8))
					$cross_slide.style.left = parseInt($cross_slide.style.left)- $copySpeed + "px";
				else
					$cross_slide.style.left = parseInt($cross_slide2.style.left) + $actualWidth + $sliderShowGap + "px";
					
				if(parseInt($cross_slide2.style.left) > ($actualWidth * (-1) + 8))
					$cross_slide2.style.left = parseInt($cross_slide2.style.left)- $copySpeed + "px";
				else
					$cross_slide2.style.left = parseInt($cross_slide.style.left) + $actualWidth + $sliderShowGap + "px";
			}
			else if(document.layers){
				if($ns_slide.left > ($actualWidth * (-1) + 8))
					$ns_slide.left -= $copySpeed;
				else
					$ns_slide.left = $ns_slide2.left+$actualWidth+$sliderShowGap;

				if($ns_slide2.left > ($actualWidth * (-1) + 8))
					$ns_slide2.left -= $copySpeed;
				else
					$ns_slide2.left = $ns_slide.left+$actualWidth+$sliderShowGap;
			}
		}

		if($iedom || document.layers){
			with(document){
				document.write('<table border="0" cellspacin="0" cellpadding="0"><td>')
				if($ieom){
					write('<div style="position:relative; width:' + $sliderWidth + '; height:' + $sliderHeight +'; overflow:hidden">')
					//write.('<div style="position:absolute; width:' + $sliderWidth + '; height:' + $sliderHeight +'; background-color:' + $sliderBgColor +'" onmouseover="copyspeed=0">')
					write('<div id="test2" style="position:absolute; left:0px; top:0px"><\/div>')
					write('<div id="test3" style="position:absolute; left:-1000px; top:0px"><\/div>')
					write('<\/div><\/div>')
				}
				else if(document.layers){
					write('<ilayer width="' + $sliderWidth +'" + height="' + $sliderHeight + '" name="ns_slidemenu" bgcolor="' + $sliderBgColor + '"> ')
					write('layer left="0" top="0" onmouseover="' + $copySpeed=0 + '" onmouseout="' + $copySpeed = $sliderSpeed + '" name="ns_slidemenu2"><\/layer>')
					write('layer left="0" top="0" onmouseover="' + $copySpeed=0 + '" onmouseout="' + $copySpeed = $sliderSpeed + '" name="ns_slidemenu3"><\/layer>')
					write('<\/layer>')
				}
				document.write('<\/td><\/table>')
			}
		}

?>