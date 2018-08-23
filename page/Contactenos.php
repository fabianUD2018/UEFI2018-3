<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contáctenos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- /Hojas de estilo -->
</head>
<body>

	<section id="inicio" class="sticky-top">
	<!-- Header -->
		<?php include("../section/header.php");?>
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
						<a class="nav-link" href="../page/Inicio.php">Inicio</a>
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
						<a class="nav-link active" href="../page/Contactenos.php">Contáctenos</a>
					</li>  
				</ul>
			</div> 
			<!-- /Navbar links -->
		</nav>
		<!-- Main Navbar -->
	</div>
	<!-- /Navbar General -->
	</section>
	
	<div class="container pt-5">
		<div class="row">
			<!-- Envío de un mensaje -->
			<div class="col-md-6">
				<h3 class="section-title text-center">Envíanos un mensaje</h3>
				<div class="section-title-divider"></div>
				<form class="pt-4">
					<input type="text" class="form-control" placeholder="Nombre">
					<input type="email" class="form-control" placeholder="Correo">
					<input type="text" class="form-control" placeholder="Asunto">
					<textarea class="form-control" rows="9" placeholder="Mensaje"></textarea>
					<div class="form-field">
						<button class="btn-block btn-lg btn-primary">Enviar</button>
                    </div>
				</form>
			</div>
			<!-- /Envío de un mensaje -->
			<!-- Información de contacto -->
			<div class="col-md-6 text-center">
					<h3 class="section-title text-center">Contacto</h3>
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
					323 93 00 Ext. 1711 -1709 <br>

					Horario de Atención<br>
					Lunes a Viernes de 8:00 a.m. a 5:00 p.m <br><br>
    		</div>
			<!-- /Información de contacto -->
		</div>
	</div>

	<!-- Pie de página -->
	<?php include("../section/footer.php"); ?>
	<!-- /Pie de página -->

	<!-- Librerias -->
  	<script src="../lib/bootstrap/js/jquery.min.js"></script>
  	<script src="../lib/bootstrap/js/popper.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
	<!-- /Librerias -->	
</body>
</html>