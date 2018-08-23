<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar programa académico</title>
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
		    <h3 class="section-title text-center">Agregar Programa Académico</h3>
      </div>
      <div class="row-12">
			  <form method="post" action="../admin/ComprobacionProgAca.php" enctype="multipart/form-data">
          <!-- Tipo de Programa Académicoo -->
          <div class="form-group row">
            <label for="selectTipoPA" class="col-4 col-form-label">Tipo de Programa Académico:</label>
            <div class="col-8">
              <select class="form-control" name="tipoprogaca"id="selectTipoPA" required oninvalid="setCustomValidity('EL Tipo de Programa Académico es obligatorio')" oninput="setCustomValidity('')">
                <option value="1$|$|$Curso">Curso</option>
                <option value="2$|$|$Diplomado">Diplomado</option>
              </select>
            </div>
          </div>
          <!-- Estado del Programa Académico -->
          <div class="form-group row">
            <label for="selectstatusPA" class="col-4 col-form-label">Estado del Programa Académico:</label>
            <div class="col-8">
              <select class="form-control" name="estadoprogaca" id="selectstatusPA" required oninvalid="setCustomValidity('EL Estado de Programa Académico es obligatorio')" oninput="setCustomValidity('')">
                <option value="1$|$|$Programación">1-Programación</option>
                <option value="2$|$|$Inscripción">2-Inscripción</option>
                <option value="3$|$|$Dictando">3-Dictando</option>
              </select>
            </div>  
          </div>          
          <!-- Nombre del Programa Académico -->
          <div class="form-group">
            <label for="namePA">Nombre del Programa Académico</label>
            <textarea class="form-control" name="nombreprogaca" id="namePA" rows="2" value="" placeholder="Nombre con el cual se estableció el Programa Académico." maxlength="299" required oninvalid="setCustomValidity('EL Nombre del Programa Académico es obligatorio')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- Dirigido -->
          <div class="form-group">
            <label for="dirigido">Dirigido a:</label>
            <textarea class="form-control" name="dirigido" id="dirigido" rows="5" value="" placeholder="Descripción de a qué personas va dirigido." maxlength="499" required oninvalid="setCustomValidity('EL dirigido a... es obligatorio')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- Fecha de inicio -->
          <div class="form-group row">
            <label for="dateinicioPA" class="col-2 col-form-label">Fecha de inicio</label>
            <div class="col-10">
              <input class="form-control" name="fechaini" type="date" value="2018-08-09" id="dateinicioPA" required oninvalid="setCustomValidity('La fecha de inicio es obligatoria')" oninput="setCustomValidity('')">
            </div>
          </div>
          <!-- Fecha de Finalización -->
          <div class="form-group row">
            <label for="datefinPA" class="col-2 col-form-label">Fecha de Finalización</label>
            <div class="col-10">
              <input class="form-control" name="fechafin" type="date" value="2018-09-11" id="datefinPA" required oninvalid="setCustomValidity('La facha de fin es obligatoria')" oninput="setCustomValidity('')">
            </div>
          </div>
          <!-- Duración del Programa Académico -->
           <div class="form-group">
            <label for="durationPA">Duración del Programa Académico</label>
            <textarea class="form-control" name="duracion" id="durationPA" rows="1" value="" placeholder="Tiempo estimado que durará el curso o diplomadp (ejemplo 7 meses)." maxlength="199" required oninvalid="setCustomValidity('La duración del Programa Académico es obligatoria')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- Descripción Grande -->
          <div class="form-group">
            <label for="DescriptionG">Descripción Grande del Programa Académico </label>
            <textarea class="form-control" name="desgrande" id="DescriptionG" rows="4" value="" placeholder="Escriba una descripción amplia y detallada, máximo de 499 caracteres." maxlength="499" required oninvalid="setCustomValidity('La descripción grande es obligatoria')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- Descripción Pequeña -->
          <div class="form-group">
            <label for="DescriptionP">Descripción Pequeña del Programa Académico </label>
            <textarea class="form-control" name="despeq" id="DescriptionP" rows="2" value="" placeholder="Escriba una descripción reducida y simple, máximo de 199 caracteres." maxlength="199" required oninvalid="setCustomValidity('La descripción pequeña es obligatoria')" oninput="setCustomValidity('')"></textarea>
          </div>
          <!-- PDF del Programa Académico-->
          <div class="form-group row">
            <label for="uploadpdfPA" class="col-4 col-form-label">Cargar un PDF del Programa Académico</label>
            <div class="col-8">
              <input type="file" class="form-control-file" name="pdfPA" id="uploadpdfPA" aria-describedby="fileHelp" accept="application/pdf">
              <small id="fileHelp" class="form-text text-muted">Cargar el plan de estudios en formato pdf.</small>
            </div>
				  </div>
          <!-- Código de recaudo del Programa Académico-->
          <div class="form-group row">
            <label for="codigoRecaudo" class="col-4 col-form-label">Código de recaudo del Programa Académico</label>
            <div class="col-8">
              <input class="form-control" name="codigorecaudo" type="number" value="" id="codigoRecaudo" placeholder="" maxlength="11">
            </div>
          </div>
          <!-- Inversión de Programa Académico -->
          <div class="form-group row">
            <label for="inversionPA" class="col-4 col-form-label">Inversión del Programa Académico</label>
            <div class="col-8">
              <textarea class="form-control" name="inversion" id="inversionPA" rows="1" value="" placeholder="Valor para la inscripción." maxlength="199" required oninvalid="setCustomValidity('La inversión del Programa Académico es obligatoria')" oninput="setCustomValidity('')">$</textarea>
            </div>
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