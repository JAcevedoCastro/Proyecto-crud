<html>
<head>
	<title>Register</title>
</head>

<body>
<a href="index.php">Inicio</a> <br />
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['password'];

	if($usuario == "" || $contrasena == "" || $name == "" || $correo == "") {
		echo "todos lo campos deben estar llenos. Uno o varios campos estan vacios.";
		echo "<br/>";
		echo "<a href='register.php'>Ir atras</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO login(name, correo, usuario, password) VALUES('$name', '$correo', '$usuario', md5('$contrasena'))")
			or die("Could not execute the insert query.");
			
		echo "Registrado correctamente";
		echo "<br/>";
		echo "<a href='login.php'>Iniciar sesion</a>";
	}
} else {
?>
	<p><font size="+2">Registerarse</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Nombre completo</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Correo</td>
				<td><input type="text" name="correo"></td>
			</tr>			
			<tr> 
				<td>Nombre de usuario</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr> 
				<td>Contraseña</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</html>
