<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conócenos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
  <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/slick/css/slick.css">
  <link rel="stylesheet" type="text/css" href="../lib/slick/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- /Hojas de estilo -->
</head>
<body class"prueba">

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
						<a class="nav-link active" href="../page/Conocenos.php">Conócenos</a>
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
  <div class="container">
    <div class="row pt-5">
      <!-- Imágenes de UEFI -->
      <div class="col-md-6 sliderUEFI">
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (1).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (2).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (3).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (6).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (5).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (7).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (8).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (9).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (10).jpg" alt="Sala UEFI" class="img-fluid"></div>
        <div><img src="../Archivos/ImagenesUEFI/fotoUEFI (11).jpg" alt="Sala UEFI" class="img-fluid"></div>
      </div>
      <!-- /Imágenes de UEFI -->
      <!-- ¿Quiénes somos? -->
      <div class="col-md-6 align-self-center">
        <h3 class="section-title text-center">¿Quiénes somos?</h3>
        <div class="section-title-divider"></div>
        <p class="text-justify">La extensión es el conjunto de actividades que complementan la educación mediante
         la actualización y ptráctica profesional a través de la suscripción de convenios 
         interinstitucionales de servicios, asesorías, consultoría y la capacitación en 
         Educación No Formal (diplomados, cursos), con un alto impacto social.</p>
      </div>
      <!-- /¿Quiénes somos? -->
    </div>
    <!-- Misión y visión -->
    <div class="row justify-content-center">
      <div class="col-md-8 sliderMisVis">
        <div>
          <h3 class="section-title text-center">Misión</h3>
          <div class="section-title-divider"></div>
          <p class="text-justify">La dependencia Unidad de Extensión Facultad de Ingeniería tiene como misión, 
          la consolidación del conocimiento, apoyada en el talento humano que responde eficientemente 
          a las necesidades y demandas de la sociedad, de los diferentes escenarios empresariales y 
          comerciales, de la comunidad académica y del Estado, mediante la suscripción de proyectos 
          interinstitucionales y programas de Educación no Formal, fundamentados en servicios 
          profesionales de alta calidad que es retroalimentado por los egresados, alumnos y docentes, 
          fortaleciendo la Facultad de Ingeniería y a su vez, la Universidad.</p>
        </div>
        <div>
          <h3 class="section-title text-center">Visión</h3>
          <div class="section-title-divider"></div>
          <p class="text-justify">La Unidad de Estensión pretende a mediano plazo, consolidar el vínculo académico 
          y profesional de la Facultad de Ingeniería, con el desarrollo sostenible del país 
          y la formación integral de la comunidad, facilitando el intercambio de productos 
          de su actividad académica, ofreciendo soluciones útiles para la sociedad y transmitiendo 
          conocimientos en todos los contextos de la diversidad cultural colombiana, de manera 
          transparente y manteniendo los más altos estándares de calidad, siendo de esta manera 
          reconocida en el ámbito local, nacional e internacional.</p>
        </div>
      </div>
    </div>
    <!-- /Misión y visión -->
    <!-- Carousel Slick ¿Con quién hemos trabajado? -->
    <h3 class="section-title text-center">Con quién hemos trabajado</h3>
          <div class="section-title-divider"></div>
    <div class="row justify-content-center">
      <div class="col-md-8 sliderCQHT">
        <div><img src="../img/clients/AlcaldiaBogota.jpg" width=60% alt="Alcaldía de Bogotá" class="img-fluid m-auto"></div>
        <div><img src="../img/clients/ConsejoSupJudicatura.png" width=60% alt="Consejo Superior de la Judicatura" class="img-fluid m-auto"></div>
        <div><img src="../img/clients/Dian.jpg" width=60% alt="DIAN" class="img-fluid m-auto"></div>
        <div><img src="../img/clients/GobernacionCundinamarca.png" width=60% alt="Gobernacion de Cundinamarca" class="img-fluid m-auto"></div>
        <div><img src="../img/clients/MinEducacion.jpg" width=60% alt="Ministerio de Educación" class="img-fluid m-auto"></div>
        <div><img src="../img/clients/PoliciaNacional.jpg" width=60% alt="Policia Nacional" class="img-fluid m-auto"></div>
      </div>
    </div>
    <!-- /Carousel Slick ¿Con quién hemos trabajado? -->
  </div>

	<!-- Pie de página -->
	<?php include("../section/footer.php"); ?>
	<!-- /Pie de página -->

  <!-- Librerias -->
  <script src="../lib/bootstrap/js/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/popper.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/slick/js/slick.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
  <!-- /Librerias -->
  <!-- Script de Carousel Imágenes de UEFI -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.sliderUEFI').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>
  <!-- /Script de Carousel Imágenes de UEFI -->
  <!-- Script de Carousel Misión y visión -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.sliderMisVis').slick({
        dots: true,
        arrows: true,
        autoplay: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>
  <!-- /Script de Carousel Misión y visión -->
  <!-- Script de Carousel ¿Con quién hemos trabajado? -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.sliderCQHT').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    });
  </script>
  <!-- /Script de Carousel ¿Con quién hemos trabajado? -->

</body>
</html>