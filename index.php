<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Bienvenido a Mi Pagina Tienda de celulares!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Bienvendio <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Cerrar sesion</a><br/>
		<br/>
		<a href='view.php'>Mirar y agregar productos</a>
		<br/><br/>
	<?php	
	} else {
		echo "Tienes que iniciar sesion para ver esta pagina <br/><br/>";
		echo "<a href='login.php'>Iniciar sesion</a> | <a href='register.php'>Registrarse</a>";
	}
	?>
	<div id="footer">
		<h7>Creado Por: </h7><a href="https://jacevedocastro.github.io/cascaracelulares/webmaster.html">Jonathan Acevedo 5J</a>
	</div>
</body>
</html>
