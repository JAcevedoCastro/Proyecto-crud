<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update'])) {	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$idempleado = $_POST['idempleado'];
	$domicilio = $_POST['domicilio'];
	$correo = $_POST['correo'];
	$fecha = $_POST['fecha'];
	$sangre= $_POST['sangre'];
	
		
	// checking empty fields
	if(empty($nombre) || empty($apellido) || empty($telefono) || empty($idempleado) || empty($domicilio) || empty($correo) || empty($fecha) || empty($sangre)) {
				
		if(empty($nombre)) {
			echo "<font color='red'>Campo de nombre esta vacio.</font><br/>";
		}
		
		if(empty($apellido)) {
			echo "<font color='red'>Campo de apellido esta vacio.</font><br/>";
		}
		
		if(empty($telefono)) {
			echo "<font color='red'>Campo de telefono esta vacio.</font><br/>";
		}
		if(empty($idempleado)) {
			echo "<font color='red'>Campo de idempleado esta vacio.</font><br/>";
		}
		if(empty($domicilio)) {
			echo "<font color='red'>Campo de domicilio esta vacio.</font><br/>";
		}
		if(empty($correo)) {
			echo "<font color='red'>Campo de correo esta vacio.</font><br/>";
		}
		if(empty($fecha)) {
			echo "<font color='red'>Campo de fecha esta vacio.</font><br/>";
		}
		if(empty($sangre)) {
			echo "<font color='red'>Campo de tipo de sangre esta vacio.</font><br/>";
		}	
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE empleado SET nombre='$nombre', apellido='$apellido', telefono='$telefono', idempleado='$idempleado', domicilio='$domicilio', correo='$correo', fecha='$fecha', sangre='$sangre' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM empleado WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nombre = $res['nombre'];
	$apellido = $res['apellido'];
	$telefono = $res['telefono'];
	$idempleado = $res['idempleado'];
	$domicilio = $res['domicilio'];
	$correo = $res['correo'];
	$fecha = $res['fecha'];
	$sangre = $res['sangre'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="view.php">Mirar Productos</a> | <a href="logout.php">Cerrar sesion</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido" value="<?php echo $apellido;?>"></td>
			</tr>
			<tr> 
				<td>telefono</td>
				<td><input type="text" name="telefono" value="<?php echo $telefono;?>"></td>
			</tr>
			<tr> 
				<td>idempleado</td>
				<td><input type="text" name="idempleado" value="<?php echo $idempleado;?>"></td>
			</tr>
			<tr> 
				<td>domicilio</td>
				<td><input type="text" name="domicilio" value="<?php echo $domicilio;?>"></td>
			</tr>
			<tr> 
				<td>correo</td>
				<td><input type="text" name="correo" value="<?php echo $correo;?>"></td>
			</tr>
			<tr> 
				<td>fecha</td>
				<td><input type="text" name="fecha" value="<?php echo $fecha;?>"></td>
			</tr>
			<tr> 
				<td>sangre</td>
				<td><input type="text" name="sangre" value="<?php echo $sangre;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
