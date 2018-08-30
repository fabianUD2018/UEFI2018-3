<?php
        include '../../consultas/conexion.php';
        
        consultarUsuario();
        
		function consultarUsuario(){   
            $usuario = $_POST['user'];
            $password = md5($_POST['pass']);//Encripta la constrasena dada por el usuario                    
		//Se consultan todos los usuarios
            $conexion=Conexion::getInstance();            
            $consulta = "select `contrasena` from `usuario` where `correo` = '" . $usuario . "'";
            $registros = $conexion->obtener($consulta);
            
            //Si hay un usuario registrado            
			if($registros){                
                $reg=mysqli_fetch_assoc($registros);                
                $passBase = $reg['contrasena'];
                if($password ==  $passBase){     //se verifican las dos contrasenas                                 
                    header("Location: ../inicioAdmin.php");
                }else{                                     
                    header("Location: ../loginAdmin.php");                                        
                exit();
                }
            }
		 //fin de la funcion
		} 

		if(empty($usuario) || empty($password)){
            
            //header("Location: ../loginAdmin.php");
            echo '<p class="alert alert-success agileits" role="alert">Ingrese todos los campos';
            exit();
        }
        
        
?>