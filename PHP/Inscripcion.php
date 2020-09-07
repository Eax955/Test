<!DOCTYPE html>
<html>
<head>
	<LINK REL=StyleSheet HREF="index.css" TYPE="text/css" MEDIA=screen>
	<title>Inscripciones</title>
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
						<h1>Inscripciones</h1>
					</td>
				</tr>
			</table>
		</div>
		<br>
		<br>
		<div>
			<form method="post" >
				<table align="center" cellspacing="110px" border="0" id="formulario">

					<tr>
						<td>
							<label for="ci">CI</label><br>
							<input type="text" name="ci"><br><br>
							<label for="Nombre">Nombre</label><br>
							<input type="text" name="Nombre"><br><br>
							<label for="ApellidoM">Apellido Materno</label><br>
							<input type="text" name="ApellidoM"><br><br>
							<label for="ApellidoP">Apellido Paterno</label><br>
							<input type="text" name="ApellidoP"><br><br>
							<label for="Direccion">Direccion</label><br>
							<input type="text" name="Direccion" ><br><br>
							<label for="edad">Edad</label><br>
							<input type="number" name="edad"><br><br>
							<label for="FN">Fecha de nacimiento</label><br>
							<input type="date" name="FN">
						</td>
						<td>
							<label for="celular">Celular</label><br>
							<input type="text" name="celular"><br><br>
							<label for="E-mail">E-mail</label><br>
							<input type="text" name="E-mail"><br><br>
							<label for="FI">Fecha de Inscripcion</label><br>
							<input type="date" name="FI"><br><br>
							<label for="FC">Fecha de bachillerato</label><br>
							<input type="date" name="FC" ><br><br>
							<label for="Colegio">Nombre del colegio</label><br>
							<input type="text" name="Colegio"><br><br>
							<label for="Carrera">Carrera</label><br>
							<input type="text" name="Carrera">
						</td>
					</tr>	
					<tr>

						<td colspan="2">
							<input type="submit" name="botoncito" value="Registrar" id="btn"><br>
							<br>
							<input type="button"  value="Terminar" id="btn" onclick="location.href='index.php'">
							
						</td>
					</tr>			

				</table>
			</form>

		</div>
</body>
</html>
<?php
	if(isset($_POST['botoncito']))
	{
	error_reporting(E_ALL ^ E_NOTICE);
	$db_host = "localhost";
	$db_usuario ="root";
	$db_password="";
	$db_nombre = "alumnos";
	$conexion = @mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre) or die("Connecion failed". mysqli_connect_error());
	$ci = $_POST['ci'];
	$nombre=$_POST['Nombre'];
	$apellidom = $_POST['ApellidoM'];
	$apellidop = $_POST['ApellidoP'];
	$direccion = $_POST['Direccion'];
	$edad = $_POST['edad'];
	$fechan = $_POST['FN'];
	$cel = $_POST['celular'];
	$mail = $_POST['E-mail'];
	$fechai = $_POST['FI'];
	$fechab = $_POST['FC'];
	$colegio = $_POST['Colegio'];
	$carrera = $_POST['Carrera'];
	$password = $nombre;
	$password.=$apellidop;

	
	
		$sql = "insert into alumno values ('$ci','$nombre','$apellidom','$apellidop','$direccion','$edad','$fechan','$cel','$mail','$fechai','$fechab','$colegio','$carrera','$ci','$password');	";

		if($result = mysqli_query($conexion,$sql))
		{	
			echo '<script "type=text/javascript"> alert("Registro! \n username:'.$ci.'\n password: '.$password.'");</script>"';
        	
    	}
		else
		{
		
			echo '<script "type=text/javascript"> alert("No se completo el registro");</script>';
		} 
	}
	?>