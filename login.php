<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MisListas Login</title>
	<link rel="stylesheet" href="/mislistas/login.css">
</head>
<body>
		<img src="listime.jpeg" class="imgLogin">
		<br>
		<form action="entrar.php" method="POST">
				<label>Sign in</label>
				<br>
				<br>
		<label>Correo:</label>
		<br>
		<input type="text" name="txtCorreo" id="txtCorreo" value="correo@dominio.com">
		<br>
		<label>Contraseña:</label>
		<br>
		<input type="password" name="txtPassword" id="txtPassword" value="">
		<br>
		<br>
		<input type="submit" value="Ingresar">
		<br>
		<br>
		<a href="">¿Olvidaste la contraseña?</a>
	</form>
</body>
</html>