<?php
	require_once '../Class/Conexion/Operaciones.php';
	class Registro extends Operaciones{
		function __construct(){
			parent::conectarBD();
		}
		function registrar($consulta){
			parent::consultar($consulta);
			echo parent::getConexion()->errno;
		}
	}
	session_start();
	if(isset($_SESSION['user'])){
		header('location:index.php');
	}else{
		$objRegistro = new Registro();
		$objRegistro->registrar('SELECT * FROM USUARIOSa');
	}
?>