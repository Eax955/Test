<!DOCTYPE html>
<html>
<head>
	<title>Nyan</title>
	<LINK REL=StyleSheet HREF="index.css" TYPE="text/css" MEDIA=screen>
	<?php
	$usuario = $_GET['user'];
	$db_host = "localhost";	
	$db_usuario ="root";
	$db_password="";
	$db_nombre = "alumnos";
	$conexion = @mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre) or die("Connecion failed". mysqli_connect_error());
		$sql = "SELECT * FROM alumno where ci =".$usuario;
		$result = mysqli_query($conexion, $sql);
		$mostrar = mysqli_fetch_array($result); 

?>
</head>
<body>
	<div id="top">
			<table border="0">
				<tr>
					<td width="30%" >
						<p align="center" >
							<img src="UCBlogo.png"  id="logo" >
						</p>
					</td>
					<td width="1500px" >
						<h1>Datos Pesonales </h1>
					</td>
				</tr>
			</table>
			<div id="space"></div>
		</div>
			<table align="center" cellspacing="110px" border="0" id="formulario">

					<tr>
						<td>
							<label >CI</label><br>
							<?php echo "<label id='datos'>".$mostrar['ci'],"</label> <br>";?>
							<label for="Nombre">Nombre</label><br>
							<?php echo "<label id='datos'>".$mostrar['nombre'],"</label> <br>";?>
							<label for="ApellidoM">Apellido Materno</label><br>
							<?php echo "<label id='datos'>".$mostrar['apellidom'],"</label> <br>";?>
							<label for="ApellidoP">Apellido Paterno</label><br>
							<?php echo "<label id='datos'>".$mostrar['apellidop'],"</label> <br>";?>
							<label for="Direccion">Direccion</label><br>
							<?php echo "<label id='datos'>".$mostrar['direccion'],"</label> <br>";?>
							<label for="edad">Edad</label><br>
							<?php echo "<label id='datos'>".$mostrar['edad'],"</label> <br>";?>
							<label for="FN">Fecha de nacimiento</label><br>
							<?php echo "<label id='datos'>".$mostrar['fNacimiento'],"</label> <br>";?>
						</td>
						<td>
							<label for="celular">Celular</label><br>
							<?php echo "<label id='datos'>".$mostrar['celular'],"</label> <br>";?>
							<label for="E-mail">E-mail</label><br>
							<?php echo "<label id='datos'>".$mostrar['mail'],"</label> <br>";?>
							<label for="FI">Fecha de Inscripcion</label><br>
							<?php echo "<label id='datos'>".$mostrar['fInscripcion'],"</label> <br>";?>
							<label for="FC">Fecha de bachillerato</label><br>
							<?php echo "<label id='datos'>".$mostrar['fBachi'],"</label> <br>";?>
							<label for="Colegio">Nombre del colegio</label><br>
							<?php echo "<label id='datos'>".$mostrar['colegio'],"</label> <br>";?>
							<label for="Carrera">Carrera</label><br>
							<?php echo "<label id='datos'>".$mostrar['carrera'],"</label> <br>";?>
						</td>
					</tr>	
					<tr>
						<td colspan="2">
							<input type="button"  value="Terminar" id="btn" onclick="location.href='index.php'">
							
						</td>
					</tr>			

				</table>
		

</body>
</html>
