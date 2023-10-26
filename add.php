<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$idempleado = $_POST['idempleado'];
	$domicilio = $_POST['domicilio'];
	$correo = $_POST['correo'];
	$fecha = $_POST['fecha'];
	$sangre= $_POST['sangre'];
	$loginId= $_SESSION['id'];
		
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Ir atras</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO products(nombre, apellido, telefono, idempleado, domicilio, correo, fecha, sangre, login_id) VALUES('$nombre','$apellido','$telefono', '$idempleado','$domicilio','$correo','$fecha','$sangre', '$loginId')");
		
		//display success message
		echo "<font color='green'>Datos agregados correctamente.";
		echo "<br/><a href='view.php'>Mirar Resultados</a>";
	}
}
?>
</body>
</html>
