<?php
		include '../consultas/conexion.php';
		
		function actualizarConvenio(){
			
		
			//Se captura la cedula
            
            $nombrePrograAca = $_POST['nombrePrograAca'];
            $fechaIni = $_POST['fechaIni'];
            $fechaFin = $_POST['fechaFin'];
            $codRecaudo = $_POST['codrecaudo'];
            $inversion = $_POST['inversion'];
            $id=$_POST["id"];

			//Se consultan todos los convenios
			$conexion=Conexion::getInstance();
			$consulta="update programaacademico set `nomprogramaacademico`='$nombrePrograAca', 
            `fechainicioprogaca`='$fechaIni', `fechafinprogaca`='$fechaFin', `codigorecaudo`='$codRecaudo', 
            `inversion`='$inversion'  where `idprogramaacademico`='$id'";
            
        $res= $conexion->actualizar($consulta);
           if ($res==1){
               echo "<h2><strong>Actualización exitosa!!!</strong></h2>";
           }
		 //fin de la funcion
		}
?>