<?php
	require_once '../Class/Conexion/Operaciones.php';
	class Registro extends Operaciones{
		function __construct(){
			parent::conectarBD();
		}
		function registrar($pass,$correo,$nombre,$apellidos){
			$consulta = "INSERT INTO usuarios VALUES (NULL,'".$nombre."','".$apellidos."','".$pass."','".$correo."',1,'u');";
			parent::consultar($consulta);
		}
		function comprobarUsuario(){
			if(parent::getConexion()->affected_rows == 1){
				return true;
			}
			return false;
		}
		function __destruct(){
			parent::cerrarConexion();
		}
	}

	session_start();
	if(isset($_SESSION['user'])){
		header('location:index.php');
	}else{
		$objRegistro = new Registro();
		$pass = $_POST['pass'];
		$correo = $_POST['correo'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];

		if($_FILES['foto']['type'] == 'image/png' || $_FILES['foto']['type'] == 'image/jpg'){
			$fichero = '../Cargas/'.basename($_FILES['foto']['name']);
			if (move_uploaded_file($_FILES['foto']['tmp_name'], $fichero)) {
		    	echo "El fichero es válido y se subió con éxito.";
			} else {
			    echo "ERROR";
			    echo "Codigo Error: ".$_FILES['foto']['error'];
			}
		}else{
			echo 'Archivo con formato no valido ! :D';
		}

		$objRegistro->registrar($pass,$correo,$nombre,$apellidos);
		if($objRegistro->comprobarUsuario()){
			header("Location: ../Registro.php");
			echo 'registro completado';
		}else{
			//echo $objRegistro->error();
			//echo $objRegistro->codigo_error();
			echo 'no se pudo registrar';
		}
	}
?>