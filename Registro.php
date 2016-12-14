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
				<div id="cabecera"><h1>REGISTRO DE USUARIO</h1></div>
				<form action="Procesos/proceso_registro.php" method="post">
					<div id="izq">
						<div class="colum"><label><span class="icon-user"></span> Nombre</label></div>
						<div class="colum"><input placeholder="Nombre" type="text" name="nombre"></div>
						<div class="colum"><label><span class="icon-users"></span> Apellidos</label></div>
						<div class="colum"><input placeholder="Apellido1 Apellido2 ..."type="text" name="apellidos"></div>
						<div class="colum"><label><span class="icon-key"></span> Contraseña</label></div>
						<div class="colum"><input placeholder="Pass"type="password" name="pass"></div>
						<div class="colum"><label><span class="icon-key"></span> Repetir Contraseña</label></div>
						<div class="colum"><input placeholder="Re-Pass" type="password" name="pass1"></div>
						<div class="colum"><label><span class="icon-mail2"></span> Correo Electronico</label></div>
						<div class="colum"><input placeholder="prueba@host.com" type="email" name="correo"></div>
						<div ><input id="Registro" type="submit" name="enviar" value="Registrarse"></div>
						</div>
					<div id="der">
						<div id="preview"></div>
						<input type="file" name="foto">
					</div>
					<!--Ciudades-->
				</form>
			</div>
		</div>
		<?php require_once 'Componentes/Footer.php' ?>
	</body>
</html>