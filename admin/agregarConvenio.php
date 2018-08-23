<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar convenio</title>
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
            <a href="perfilAdmin.php" class="dropdown-item">Perfil</a>
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
        <a href="inicioAdmin.php" class="titleSliderAdmin">
          <i class="fa fa-home">
            <span>
              Inicio
            </span>
          </i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#agregarSubmenu" data-toggle="collapse" aria-expanded="true" class="titleSliderAdmin active">
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
      <div class="row-12">
		    <h3 class="section-title text-center">Agregar Convenio Interadministrativo</h3>
      </div>
      <div class="row-12">
			  <form method="post" action="../admin/ComprobacionConvenio.php" enctype="multipart/form-data">
          <!-- Año de convenio -->
          <div class="form-group row">
            <label for="selectyear" class="col-4 col-form-label">Año del convenio Interadministrativo suscrito:</label>
            <div class="col-8">
              <select class="form-control" name="yearconvenio" id="selectyear"required oninvalid="setCustomValidity('El Año del convenio es obligatorio')" oninput="setCustomValidity('')">
                <option value="2000$|$|$">2000</option>
                <option value="2001$|$|$">2001</option>
                <option value="2002$|$|$">2002</option>
                <option value="2003$|$|$">2003</option>
                <option value="2004$|$|$">2004</option>
                <option value="2005$|$|$">2005</option>
                <option value="2006$|$|$">2006</option>
                <option value="2007$|$|$">2007</option>
                <option value="2008$|$|$">2008</option>
                <option value="2009$|$|$">2009</option>
                <option value="2010$|$|$">2010</option>
                <option value="2011$|$|$">2011</option>
                <option value="2012$|$|$">2012</option>
                <option value="2013$|$|$">2013</option>
                <option value="2014$|$|$">2014</option>
                <option value="2015$|$|$">2015</option>
                <option value="2016$|$|$">2016</option>
                <option value="2017$|$|$">2017</option>
                <option value="2018$|$|$">2018</option>
              </select>
            </div>
          </div>     
          <!-- Nombre de convenio -->
          <div class="form-group">
            <label for="nameconvenio">Nombre del Convenio</label>
            <textarea class="form-control"  name="nombreconvenio" id="nameconvenio" rows="2" value="" placeholder="Nombre con el cual se estableció el convenio." maxlength="499" required oninvalid="setCustomValidity('El Nombre del convenio es obligatorio')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- Estado de convenio -->
          <div class="form-group row">
            <label for="statusconvenio" class="col-2 col-form-label">Estado del Convenio</label>
            <div class="col-10">
              <textarea class="form-control" name="estadoconvenio" id="statusconvenio" rows="1" value="" placeholder="Estado actual en el que se encuentra el convenio, ya sea finalizado, en ejecución, conciliación, etc." maxlength="49" required oninvalid="setCustomValidity('El Estado del convenio es obligatorio')" oninput="setCustomValidity('')"></textarea>
            </div>
          </div>
          <!-- Contratante de convenio -->
          <div class="form-group">
            <label for="contractorconvenio">Contratante del Convenio</label>
            <textarea class="form-control" name="contratanteconvenio" id="contractorconvenio" rows="2" value="" placeholder="Entidad con la que se estableció el convenio." maxlength="299" required oninvalid="setCustomValidity('El Contratante del convenio es obligatorio')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- Valor de convenio -->
          <div class="form-group row">
            <label for="valueconvenio" class="col-2 col-form-label">Valor del Convenio</label>
            <div class="col-10">
              <textarea class="form-control" name="valorconvenio" id="valueconvenio" rows="1" value="" placeholder="Valor con pactado en el convenio." maxlength="299" required oninvalid="setCustomValidity('El Valor del convenio es obligatorio')" oninput="setCustomValidity('')">$</textarea>
            </div>
          </div>
          <!-- Duración de convenio -->
          <div class="form-group row">
            <label for="durationconvenio" class="col-2 col-form-label">Duración Convenio</label>
            <div class="col-10">
              <textarea class="form-control" name="duracionconvenio" id="durationconvenio" rows="1" value="" placeholder="Tiempo en que se realizó el convenio (ejemplo 7 meses)." maxlength="99" required oninvalid="setCustomValidity('La duración del convenio es obligatoria')" oninput="setCustomValidity('')"></textarea>
            </div>
          </div>
          <!-- Objeto de convenio -->
          <div class="form-group">
            <label for="purposeconvenio">Objeto del Convenio</label>
            <textarea class="form-control" name="objetoconvenio" id="purposeconvenio" rows="5" value="" placeholder="Descripción, objeto ó proposito del convenio." maxlength="999" required oninvalid="setCustomValidity('El Objeto del convenio es obligatorio')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- Botones -->
          <div class="form-group">
            <div class="col-xs-offset-6 col-xs-12 text-center">
              <input type="submit" class="btn btn-primary" value="Agregar">
              <input type="reset" class="btn btn-default" value="Limpiar">
            </div>
          </div>
        </form>
      </div>
    </div>
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