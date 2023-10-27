<?php session_start(); ?>
<html>
<head>
	<title>inicair sesion</title>
</head>

<body>
<a href="index.php">Inicio</a> <br />
<?php
include("conexion.php");

if(isset($_POST['submit'])) {
	$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
	$contrasena = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($usuario == "" || $contrasena == "") {
		echo "Algun campo de nombre o contraseña esta vacio.";
		echo "<br/>";
		echo "<a href='iniciar_sesion.php'>Ir atras</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE usuario='$usuario' AND password=md5('$contrasena')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['usuario'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Nombre de usuario o contraseña invalido";
			echo "<br/>";
			echo "<a href='iniciar_sesion.php'>Ir atras</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}
	}
} else {
?>
	<p><font size="+2">Iniciar sesion</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Nombre</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr> 
				<td>Contraseña</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</html>
