<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
	<title>Homepage</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="add.html">Agregar datos nuevos</a> | <a href="logout.php">Cerrar Sesion</a>
	<br/><br/>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
			<td>ID Empleado</td>
			<td>Domicilio</td>
			<td>Correo</td>
			<td>Fecha</td>
			<td>Tipo de sangre</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellido']."</td>";
			echo "<td>".$res['telefono']."</td>";
			echo "<td>".$res['idempleado']."</td>";
			echo "<td>".$res['domicilio']."</td>";
			echo "<td>".$res['correo']."</td>";
			echo "<td>".$res['fecha']."</td>";
			echo "<td>".$res['sangre']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Borrar</a></td>";		
		}
		?>
	</table>	
</body>
</html>
