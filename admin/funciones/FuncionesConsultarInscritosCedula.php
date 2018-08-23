<?php
		include '../consultas/conexion.php';
		
		function consultarInscritosCedula(){
			
		echo "<table class=\"table table-striped table-advance table-hover\">";
		echo "<tbody>";
			//Cabecera de la tabla
			echo "<tr>";
				echo "<th><center><i class=\"fa fa-id-badge\"></i><br>id</center></th>";
				echo "<th><center><i class=\"fa fa-user\"></i><br>Nombre</center></th>";
				echo "<th><center><i class=\"fa fa-user\"></i><br>Apellidos</center></th>";
				echo "<th><center><i class=\"fa fa-id-card\"></i><br>Tipo Documento</center></th>";
				echo "<th><center><i class=\"fa fa-id-card\"></i><br>Numero</center></th>";
				echo "<th><center><i class=\"fa fa-phone\"></i><br>Celular</center></th>";
				echo "<th><center><i class=\"fa fa-envelope\"></i><br>email</center></th>";
			echo "</tr>";
			//Se captura la cedula
			$numerodoc = $_POST['numerodocumento'];

			//Se consultan todos los convenios
			$conexion=Conexion::getInstance();
			$consulta = "select `idpersonainscrita`, `nombreinscrito`, `apellidoinscrito`, `idtipodocumento`, `numerodocumento`, `telefonocelular`, `email` from `personainscrita` where `numerodocumento`= \"$numerodoc\"";
			//Si hay registros se crea una fila por cada registro
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$idpersonainscrita = $reg['idpersonainscrita'];
					$nombreinscrito = $reg['nombreinscrito'];
					$apellidoinscrito = $reg['apellidoinscrito'];
					$idtipodocumento = $reg['idtipodocumento'];
					$numerodocumento = $reg['numerodocumento'];
					$telefonocelular = $reg['telefonocelular'];
					$email = $reg['email'];
					echo "<tr>";
						echo "<td>$idpersonainscrita</td>";
						echo "<td>$nombreinscrito</td>";
						echo "<td>$apellidoinscrito</td>";
						//Se cambian los números de id tipo documento a letras 
						if($idtipodocumento==1){
							$idtipodocumentoLetra="Cédula";
						}
						elseif($idtipodocumento==2){
							$idtipodocumentoLetra="Tarjeta de Identidad";
						}else{
							$idtipodocumentoLetra="Cédula de extranjeria";
						}
						echo "<td>$idtipodocumentoLetra</td>";
						echo "<td>$numerodocumento</td>";
						echo "<td>$telefonocelular</td>";
						echo "<td>$email</td>";
					echo "</tr>";
				}
				echo "</tbody>";
			echo "</table>";
			}
			else{
				$mensajeInscritos = "No hay una persona inscrita en la base de datos con ese número de cédula";
				echo "<h3 class=\"text-center text-muted\">".$mensajeInscritos."</h3>";
			}
		 //fin de la funcion
		}
?>