<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio UEFI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<!-- /Hojas de estilo -->
</head>
<body>
	<section id="inicio" class="sticky-top">
	<!-- Header -->
		<?php include("../section/header.php");
			  include("../funciones/FuncionesInicio.php");
		?>
	<!-- /Header -->
	<!-- Navbar General -->
	<div class="row nav-general">
		<!-- Navbar Logos -->
		<nav class="col-md-5 navbar navbar-expand-md">
			<!-- Brand -->
			<img src="../img/LOGO-UD-1.png" alt="Logo UD" style="width:40%" class="pr-1">
			<img src="../img/UEFIsmall.png" alt="Logo UEFI" style="width:30%"class="pl-1">
			<!-- /Brand -->
		</nav>
		<!-- /Navbar Logos -->
		<!-- Main Navbar -->
		<nav class="col-md-7 navbar navbar-expand-md">
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler toggler-personalizado" type="button" data-toggle="collapse" data-target="#generalNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- /Toggler/collapsibe Button -->
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="generalNavbar">
				<ul class="navbar-nav ml-auto pt-5 pr-5 font-weight-bold">
					<li class="nav-item pr-2">
						<a class="nav-link active" href="../page/Inicio.php">Inicio</a>
					</li>
					<li class="nav-item dropdown pr-2">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Educación</a>
						<!-- Dropdown -->
						<div class="dropdown-menu navbar-dark">
							<a href="../page/Cursos.php" class="dropdown-item font-weight-bold">Cursos</a>
							<a href="../page/Diplomados.php" class="dropdown-item font-weight-bold">Diplomados</a>
						</div>
						<!-- /Dropdown -->
					</li> 
					<li class="nav-item pr-2">
						<a class="nav-link" href="../page/Conocenos.php">Conócenos</a>
					</li>
					<li class="nav-item pr-2">
						<a class="nav-link" href="../page/Convenios.php">Convenios</a>
					</li>
					<li class="nav-item font-weight-bold pr-2">
						<a class="nav-link" href="../page/Contactenos.php">Contáctenos</a>
					</li>  
				</ul>
			</div> 
			<!-- /Navbar links -->
		</nav>
		<!-- Main Navbar -->
	</div>

	<!-- /Navbar General -->
	</section>
	<!-- Inicio -->
	<div class="container-fluid">
	
	
		<!-- Noticias -->
		<section id="Noticias " class="col-sm-12 justify-content-center pt-5">
		<?php// include("../section/nav-lateral.php"); ?>
		
			<!--Slider-->
			<?php
			 //consultarImagenesSlider();
			?>
			<!--/Slider-->
					<!-- secciones de cursos diplomados y convenio -->
			<div class=" cursos-diplo-con ">
				<ul class="nav nav-tabs" id="cursos_diplomados_convenios" role="tablist">
					<li class="nav-item">
						<a class="nav-link "  data-toggle="tab" href="#cursos" role="tab" aria-controls="cursos" aria-selected="true">Cursos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link"  data-toggle="tab" href="#diplomados" role="tab" aria-controls="diplomados" aria-selected="false">Diplomados</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#convenios" role="tab" aria-controls="convenios" aria-selected="false">Convenios</a>
					</li>
				</ul>
				<div class="tab-content" id="contenido">
					<div class="tab-pane fade" id="cursos" role="tabpanel" aria-labelledby="home-tab">
						<div class="row">
							<?php
							traerImagenes(1); //Programas academicos cursos dictando
							//consultarImagenesProgramaAcademico();
							?>
						</div>
					</div>
					<div class="tab-pane fade" id="diplomados" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row">
							<?php 
								traerImagenes(2);
							?> 
						</div>
					</div>
					<div class="tab-pane fade" id="convenios" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row">
							<?php
							//traerImagenes(3);
							?>
						</div>

					</div>
				</div>
			</div>
				<!-- Noticias más relevantes -->
			 
			<!-- info inicio-->
			<?php include("../section/imagenes-muestra.php"); ?>
			<!-- info inicio-->

			
		</section>
		<!-- /Noticias -->
		<!-- Portafolio -->
		<section id="Portafolio" class="row-md-12 wow fadeInUp pt-5">
			<!-- Título -->
			<div class="col-md-12">
				<h3 class="section-title text-center">Portafolio</h3>
				<div class="section-title-divider"></div>
				<br>
			</div>
			<!-- /Título -->
			<!-- Contenido del portafolio -->
			<div class="row">
				<div class="col-md-6">
					<!-- Información escrita del protafolio -->
					<div class="row justify-content-center">
						<!-- Acordeón -->
						<div id="accordion">
							<!-- Extensión no formal -->
  							<div class="card">
    							<div class="card-header" id="headingOne">
      								<h5 class="mb-0">
        								<button class="btn btn-link btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Extensión no formal
        								</button>
      								</h5>
    							</div>		
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      								<div class="card-body">
									  	<ul>
									  		<li type="circle">Programas Corporativos</li>
											<li type="circle">Programas de Fortalecimiento y Desarrollo Local</li>
											<li type="circle">Acción en Iniciativas Productivas</li>
											<li type="circle">Programas de Innovación</li>
											<li type="circle">Programas de Extensión Social</li>
											<li type="circle">Programas Interdisciplinarios de Extensión</li>
											<li type="circle">Otras Modalidades de Extensión</li>
										</ul>
      								</div>
    							</div>
  							</div>
							<!-- /Extensión no formal -->
							<!-- Hemos trabajado en: -->
  							<div class="card">
    							<div class="card-header" id="headingTwo">
      								<h5 class="mb-0">
        								<button class="btn btn-link btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          									Hemos trabajado en:
        								</button>
      								</h5>
    							</div>
    							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      								<div class="card-body">
									  	<ul>
										  	<li type="circle">Proyectos de Interventoría</li>
											<li type="circle">Proyectos de Capacitación</li>
											<li type="circle">Proyectos de Asistencia técnica y tecnológica</li>
											<li type="circle">Proyectos especiales</li>
											<li type="circle">Consultorías Externas</li>
										</ul>
      								</div>
    							</div>
		  					</div>
							<!-- /Hemos trabajado en: -->
							<!-- Proyectos sociales -->
  							<div class="card">
    							<div class="card-header" id="headingThree">
      								<h5 class="mb-0">
        								<button class="btn btn-link btn-block collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          									Proyectos sociales
        								</button>
      								</h5>
    							</div>
    							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      								<div class="card-body">
									  	<ul>
										  	<li type="circle">Programas de cooperación con organizaiones locales</li>
											<li type="circle">Proyectos de participación local</li>
											<li type="circle">Proyectos de desarrollo local</li>
											<li type="circle">Programas orientados a vinculación laboral</li>
											<li type="circle">Proyectos de cultura, arte, recreación y deporte</li>
											<li type="circle">Proyectos de bienestar social</li>
											<li type="circle">Pasantías</li>
										</ul>
      								</div>
    							</div>
  							</div>
							<!-- /Proyectos sociales -->
						</div>
						<!-- /Acordeón -->
					</div>
					<!-- /Información escrita del protafolio -->
				</div>
				<!-- Imagen de protafolio -->
				<div class="machete col-md-6"><img src="../img/img-Portafolio.jpg" class="img-fluid" alt=""></div>
				<!-- /Imagen de protafolio -->
			</div>
			<!-- /Contenido del portafolio -->
    	</section>
		<!-- /Portafolio -->
		<!-- Información y mapa -->
    	<section id="InfoMapa" class="pt-5">
			<div class="row">
				<!-- Información -->
				<div class="col-md-6 text-center">
					<h3 class="section-title text-center">Información</h3>
					<div class="section-title-divider"></div>
					<br>
					Coordinador Unidad de Extensión Facultad de Ingeniería<br>
					Victor Hugo Medina Garcia<br><br>

					Correo<br>
					medina@udistrital.edu.co<br><br>

					Asistente encargado<br>
					Oscar Leonardo Cely Granados<br><br>

					Correo de la Unidad de Extensión<br>
					unidad-extension-ing@udistrital.edu.co <br><br>

					Teléfono<br>
					323 93 00 Ext. 1711 -1709 <br><br>

					Horario de Atención<br>
					Lunes a Viernes de 8:00 a.m. a 5:00 p.m <br><br>
    			</div>
				<!-- /Información -->
				<!-- Mapa -->
				<div class="col-md-6">
					<h3 class="section-title text-center">Mapa</h3>
					<div class="section-title-divider"></div>
    				<div id="map" style="width:100%;height:80%;"></div>   				
    			</div>
				<!-- /Mapa -->
    		</div>
		</section>
		<!-- /Información y mapa -->
    </div>
	<!-- /Inicio -->
	
	<!-- Pie de página -->
	<?php include("../section/footer.php"); ?>
	<!-- /Pie de página -->
	
	<!-- Librerias -->
	<script src="../lib/bootstrap/js/jquery.min.js"></script>
  	<script src="../lib/bootstrap/js/popper.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../js/mapa.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<!-- /Librerias -->

</body>
</html>