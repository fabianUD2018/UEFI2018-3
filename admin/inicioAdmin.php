<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio Admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- /Hojas de estilo -->
</head>
<body>
  <!-- Barra de navegación del Admin -->
  <nav class="cabecera navbar navbar-expand-md">
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Logo extremo izquierdo -->
      <ul class="mr-auto navbar-nav">
        <li>
          <a href="inicioAdmin.php" class="Orange">UEFI <span class="Blue">ADMIN</span></a>
        </li>
      </ul>
      <!-- /Logo extremo izquierdo -->
      <!-- Dropdown de opciones del Admin -->
      <ul class="navbar-nav">
        <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Unidad de Extensión</a>
          <!-- Dropdown -->
          <div class="dropdown-menu">
            <a href="perfil.php" class="dropdown-item">Perfil</a>
            <a href="loginAdmin.php" class="dropdown-item">Cerrar sesión</a>  
          </div>
          <!-- /Dropdown -->
        </li> 
      </ul>
      <!-- /Dropdown de opciones del Admin -->
    </div>
  </nav>
  <!-- /Barra de navegación del Admin -->
  <div class="wrapper">
    <!-- Barra lateral de navegación -->
    <ul id="tabs" class="nav nav-tabs flex-column" role="tablist">
      <li class="nav-item">
        <a href="inicioAdmin.php" class="titleSliderAdmin active">
          <i class="fa fa-home">
            <span>
              Inicio
            </span>
          </i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#agregarSubmenu" data-toggle="collapse" aria-expanded="true" class="titleSliderAdmin">
          <i class="fa fa-plus">
            <span>
              Agregar
            </span>
          </i>
        </a>
        <ul class="list-unstyled collapse in" id="agregarSubmenu" aria-expanded="true" style="">
          <li><a href="agregarProgAca.php" class="textSliderAdmin">Programa académico</a></li>
          <li><a href="agregarConvenio.php" class="textSliderAdmin">Convenio</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#consultarSubmenu" data-toggle="collapse" aria-expanded="true" class="titleSliderAdmin">
          <i class="fa fa-eye">
            <span>
              Consultar
            </span>
          </i>
        </a>
        <ul class="list-unstyled collapse in" id="consultarSubmenu" aria-expanded="true" style="">
          <li><a href="consultarProgAca.php" class="textSliderAdmin">Programa académico</a></li>
          <li><a href="consultarConvenios.php" class="textSliderAdmin">Convenios</a></li>
          <li><a href="consultarInscripciones.php" class="textSliderAdmin">Inscripciones</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="loginAdmin.php" aria-expanded="true" class="titleSliderAdmin">
          <i class="fa fa-sign-out">
            <span>
              Cerrar sesión
            </span>
          </i>
        </a>
      </li>
    </ul>
    <!-- /Barra lateral de navegación -->
    <!-- Contenido específico de la página -->
    <div class="container">
      <div class="row justify-content-around buttonIndex py-3">
        <div class="col-5 buttonCursos text-center">
          <a href="consultarProgAca.php">
            <i class="fa fa-book py-4"><span class="px-1">Cursos</span></i>
          </a>
        </div>
        <div class="col-5 buttonDiplomados text-center">
          <a href="consultarProgAca.php">
            <i class="fa fa-book py-4"><span class="px-1">Diplomados</span></i>
          </a>
        </div>
      </div>
      <div class="row justify-content-around buttonIndex py-3">
        <div class="col-5 buttonConvenios text-center">
          <a href="consultarConvenios.php">
            <i class="fa fa-briefcase py-4"><span class="px-1">Convenios</span></i>
          </a>
        </div>
        <div class="col-5 buttonInscripciones text-center">
          <a href="consultarInscripciones.php">
            <i class="fa fa-user-plus py-4"><span class="px-1">Inscripciones</span></i>
          </a>
        </div>
      </div>
    </div>
    <!--<div id="content">
      <h2>Lorem Ipsum Dolor</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="line"></div>
      <h2>Lorem Ipsum Dolor</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="line"></div>
    </div>-->
    <!-- /Contenido específico de la página -->
  </div>  

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