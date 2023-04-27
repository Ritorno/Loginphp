<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main.css">
	<title>Iniciar sesión</title>
	
</head>
<body bgcolor="aadcee" >
	
	<form method="post" action="">
		
	<table border='8' align='center' cellpadding='2' cellspacing='3' bgcolor='f5d4a2' >
	<tr>
	<td>
	<h1>Inicio de Sesión</h1>
	</td>	
	</tr>
	<tr>
			<td>
		<label for="usuario">Usuario:</label>
		<input type="text" name="usuario" id="usuario">
		</td>
		</tr>
		<tr>
			<td>
		<label for="contrasena">Contraseña:</label>
		<input type="password" name="contrasena" id="contrasena">
			</td>
		</tr>
		<tr>
			<td>
		<input type="submit" value="Iniciar sesión">
			</td>
		</tr>
		
	</table>
	
	
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$usuario = $_POST["usuario"];
		$contrasena = $_POST["contrasena"];

		$errores = array();

		if (empty($usuario)) {
			$errores[] = "Debe ingresar un nombre de usuario";
		}

		if (empty($contrasena)) {
			$errores[] = "Debe ingresar una contraseña";
		}

		if (count($errores) == 0) {
			echo "<p>Bienvenido $usuario</p>";
		} else {
			echo "<ul>";
			foreach ($errores as $error) {
				echo "<li>$error</li>";
			}
			echo "</ul>";
		}
	}
	?>
</form>
</body>
</html>