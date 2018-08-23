<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1">
	<title>Inscripción</title>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- /Hojas de estilo -->

	<script type="text/javascript">
		<?php
		include '../funciones/FuncionesInscripcionPersona.php';
		?>
		function activar(obj) {
		frm = document.forms[0];
		for (i=0; ele = frm.getElementsByClassName('selectprogaca')[i]; i++)
			ele.style.display = (ele==frm[obj]) ? 'block' : 'none';
		}
	</script>
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

	<!--Formulario-->
	<div class="container">
		<h3 class="section-title text-center">Formulario de Inscripción</h3>
        <div class="section-title-divider"></div>
			<form method="post" action="../page/ComprobacionInscripcion.php" enctype="multipart/form-data">
				<div class="form-group row">
					<label for="inputnombre" class="col-2 col-form-label">Programa Academico</label>
					<div class="col-10">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="radioprogaca" id="radioCurso" value="selectcurso" onclick="activar('selectcurso')" checked>
							<label class="form-check-label" for="radioCurso">
								Curso
							</label>
						</div>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="radioprogaca" id="radioDiplomado" onclick="activar('selectdiplomado')" value="selectdiplomado">
							<label class="form-check-label" for="radioDiplomado">
								Diplomado
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="selectNombreProgAca"class="col-2 col-form-label">Nombre Programa Academico</label>
					<div class="col-10">
						<select class="form-control selectprogaca" id="selectNombreProgAca" name="selectcurso" style="display:block" oninvalid="setCustomValidity('Seleccione un Programa Academico')" 
						oninput="setCustomValidity('')">
						<?php
							mostrarnombreprogaca("1");
						?>
						</select>
						<select class="form-control selectprogaca" id="selectNombreProgAca" name="selectdiplomado" style="display:none" oninvalid="setCustomValidity('Seleccione un Programa Academico')" 
						oninput="setCustomValidity('')">
						<?php
							mostrarnombreprogaca("2");
						?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputnombre" class="col-2 col-form-label">Nombre</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" placeholder="Nombre" id="inputnombre" name="nombre" required oninvalid="setCustomValidity('El nombre es obligatorio')" 
						oninput="setCustomValidity('')" maxlength="99" minlength="3">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputapellido" class="col-2 col-form-label" >Apellido</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" placeholder="Apellido" id="inputapellido" name="apellido" required oninvalid="setCustomValidity('El apellido es obligatorio')" 
						oninput="setCustomValidity('')" maxlength="99" minlength="3">
					</div>
				</div> 

				<div class="form-group row">
					<label for="selectdocumento"class="col-2 col-form-label">Tipo de documento</label>
					<div class="col-10">
						<select class="form-control" id="selectdocumento" name="tipoDocumento" required oninvalid="setCustomValidity('El documento de identificación es obligatorio')" 
						oninput="setCustomValidity('')">
						<option value="1$|$|$Cédula">Cédula</option>
						<option value="2$|$|$Tarjeta de Identidad">Tarjeta de Identidad</option>
						<option value="3$|$|$Cédula de Extranjería">Cédula de Extranjería</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputnumerodocumento" class="col-2 col-form-label">Número documento</label>
					<div class="col-10">
						<input class="form-control" type="number" value="" placeholder="10223548593" id="inputnumerodocumento" name="numeroDocumento" pattern="[0-9]" required oninvalid="setCustomValidity('El número del documento de identificación es obligatorio')" 
						oninput="setCustomValidity('')"maxlength="19" minlength="4">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputlugarinscrip" class="col-2 col-form-label">Lugar de Inscripción</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" placeholder="Lugar de Inscripción del documento de identificación" id="inputlugarinscrip"  name="lugarExpedicion" required oninvalid="setCustomValidity('El lugar de inscripción del documento de identificación es obligatorio')" 
						oninput="setCustomValidity('')" maxlength="149" minlength="3">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputfechanacimiento" class="col-2 col-form-label">Fecha de nacimiento</label>
					<div class="col-10">
						<input class="form-control" type="date" value="" id="inputfechanacimiento" required name="fechaNacimiento" oninvalid="setCustomValidity('La fecha de nacimiento es obligatoria')" 
						oninput="setCustomValidity('')" >
					</div>
				</div>
				<div class="form-group row">
					<label for="inputlugarnacimiento" class="col-2 col-form-label">Lugar de nacimiento</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" placeholder="Lugar de nacimiento" id="inputlugarnacimiento" name="lugarNacimiento" required oninvalid="setCustomValidity('El lugar de inscripción del documento de nacimiento es obligatorio')" 
						oninput="setCustomValidity('')" maxlength="149" minlength="3">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputdireccionhogar" class="col-2 col-form-label">Dirección Hogar</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" placeholder="Dirección del Hogar" id="inputdireccionhogar" name="direccionHogar" required oninvalid="setCustomValidity('La dirección de residencia es obligatoria')" 
						oninput="setCustomValidity('')" maxlength="149" minlength="8">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputdireccionoficina" class="col-2 col-form-label">Dirección Oficina</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" placeholder="Dirección de oficina o correspondencia" id="inputdireccionoficina" name="direccionOficina" maxlength="149">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputtelhogar" class="col-2 col-form-label">Telefono Hogar</label>
					<div class="col-10">
						<input class="form-control" type="number" value="" placeholder="9999999" id="inputtelhogar" name="telefonoHogar" pattern="[0-9]" maxlength="11">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputteloficina" class="col-2 col-form-label">Telefono Oficina</label>
					<div class="col-10">
						<input class="form-control" type="number" value="" placeholder="7777777" id="inputteloficina" name="inputteloficina" pattern="[0-9]" maxlength="11">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputtelcelular" class="col-2 col-form-label">Telefono Celular</label>
					<div class="col-10">
						<input class="form-control" type="number" value="" placeholder="301 999 9999" id="inputtelcelular" name="inputtelcelular" pattern="[0-9].{10}" required oninvalid="setCustomValidity('El número telefónico celular es obligatorio')" 
						oninput="setCustomValidity('')" maxlength="11">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputemail" class="col-2 col-form-label">Correo Electrónico</label>
					<div class="col-10">
						<input class="form-control" type="email" value="" placeholder="tu_correo@ejemplo.com" id="inputemail" name='inputemail' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity('El correo electrónico es obligatorio')" 
						oninput="setCustomValidity('')" maxlength="99" minlength="6">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputprofesion" class="col-2 col-form-label">Profesión</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" placeholder="Profesión que desempeña" id="inputdireccionoficina" name="profesion" required oninvalid="setCustomValidity('La profesión es obligatoria')" 
						oninput="setCustomValidity('')" maxlength="149" minlength="6">
					</div>
				</div>
				<div class="form-group row">
					<label for="uploadfoto" class="col-2 col-form-label">Cargar foto 3X4</label>
					<div class="col-10">
						<input type="file" class="form-control-file" name="fotocargada" id="uploadfoto" aria-describedby="fileHelp" accept="image/jpg, imagen/png" required oninvalid="setCustomValidity('La foto 3X4 es obligatoria')" 
						oninput="setCustomValidity('')" >
						<small id="fileHelp" class="form-text text-muted">Cargar una foto de 3X4 fondo blanco o azul.</small>
					</div>
				</div>
				<div class="form-group row">
					<label for="uploadhojavida" class="col-2 col-form-label">Cargar hoja de vida</label>
					<div class="col-10">
						<input type="file" class="form-control-file"name="hvcargada" id="uploadhojavida" aria-describedby="fileHelp" accept="application/pdf" required oninvalid="setCustomValidity('La hoja de vida es obligatoria')" 
						oninput="setCustomValidity('')">
						<small id="fileHelp" class="form-text text-muted">Cargar un hoja de vida en formato pdf.</small>
					</div>
				</div>
				<div class="form-group row">
					<label for="uploadcedula" class="col-2 col-form-label">Cargar cédula</label>
					<div class="col-10">
						<input type="file" class="form-control-file" name="cedulacargada" id="uploadcedula" aria-describedby="fileHelp" accept="image/jpg, imagen/png, application/pdf" required oninvalid="setCustomValidity('El escaner de la cédula es obligatoria')" 
						oninput="setCustomValidity('')">
						<small id="fileHelp" class="form-text text-muted">Cargar una foto png o jpg o achivo pdf con la cedula scaneada.</small>
					</div>
				</div>
				<div class="form-group row">
					<label for="uploadcarneseguro" class="col-2 col-form-label">Cargar carné seguro</label>
					<div class="col-10">
						<input type="file" class="form-control-file" name="carnesegurocargado"id="uploadcarneseguro" aria-describedby="fileHelp" accept="image/jpg, imagen/png, application/pdf" required oninvalid="setCustomValidity('El escaner del carné del seguro médico es obligatorio')" 
						oninput="setCustomValidity('')">
						<small id="fileHelp" class="form-text text-muted">Cargar una foto png o jpg o achivo pdf con el carné del seguro médico scaneado.</small>
					</div>
				</div>
				<div class="form-group row">
					<label for="uploadconsignacion" class="col-2 col-form-label">Cargar consignación</label>
					<div class="col-10">
						<input type="file" class="form-control-file" name="consignacioncargado"id="uploadconsignacion" aria-describedby="fileHelp" accept="image/jpg, imagen/png, application/pdf" required oninvalid="setCustomValidity('El escaner del recibo de pago es obligatorio')" 
						oninput="setCustomValidity('')">
						<small id="fileHelp" class="form-text text-muted">Cargar una foto png o jpg o achivo pdf del recibo de pago del curso scaneado.(Se debe ver el timbre del Banco de Occidente)</small>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-xs-offset-3 col-xs-12">
					<label class="checkbox-inline">
						<input type="checkbox" value="agree" req oninvalid="setCustomValidity('Debe aceptar los Terminos y Condiciones')" 
						oninput="setCustomValidity('')">  Acepto <a href="terminos.php">Terminos y condiciones</a>.
					</label>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-offset-3 col-xs-12">
						<input type="submit" class="btn btn-primary" value="Enviar">
						<input type="reset" class="btn btn-default" value="Limpiar">
					</div>
				</div>
			</form>
		</div>
	


	<!--/Formulario-->

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