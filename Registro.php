<!DOCTYPE html>
<html>
	<head>
		<?php require_once 'Componentes/Importar.html' ?>
		<link rel="stylesheet" type="text/css" href="Estilo/Estilos_Registro.css">
		<title>Registro en TempusFugit</title>
	</head>
	<body>
		<?php require_once 'Componentes/BarraNav.php' ?>
		<div id="content_formulario">
			<div id="formulario">
				<h1>REGISTRO DE USUARIO</h1>
				<form action="Procesos/proceso_registro.php" method="post">
					<div class="colum"><label><span class="icon-user"></span> Nombre</label></div>
					<div class="colum"><input type="text" name="Nombre"></div>
					<div class="colum"><label><span class="icon-users"></span> Apellidos</label></div>
					<div class="colum"><input type="text" name="Apellidos"></div>
					<div class="colum"><label><span class="icon-key"></span> Contraseña</label></div>
					<div class="colum"><input type="password" name="pass"></div>
					<div class="colum"><label><span class="icon-key"></span> Repetir Contraseña</label></div>
					<div class="colum"><input type="password" name="pass"></div>
					<div class="colum"><label><span class="icon-mail2"></span> Correo Electronico</label></div>
					<div class="colum"><input type="email" name="correo"></div>
					<div ><input id="Registro" type="submit" name="enviar" value="Registrarse"></div>
					<!--Ciudades-->
				</form>
			</div>
		</div>
		<?php require_once 'Componentes/Footer.php' ?>
	</body>
</html>