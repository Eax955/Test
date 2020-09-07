<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesion</title>
	<LINK REL=StyleSheet HREF="index.css" TYPE="text/css" MEDIA=screen>
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
						<h1>Inicio De sesion</h1>
					</td>
				</tr>
			</table>
		</div>
		<div id="space"></div>
		<div align="center" id="inicio">
			<form method="post" >
				<label for="Username">username</label> <br>
				<input type="text" name="Username" id="ini"> <br>
				<label for="password">password</label> <br>
				<input type="text" name="password" id="ini"> <br>
				<br><br>
				<input type="submit" name="boton" value="Ingresar" id="inib">
				<br>
			</form>
		</div>
</body>
</html>
<?php
if(isset($_POST['boton']))
{
error_reporting(E_ALL ^ E_NOTICE);
	$usuario = $_POST['Username'];
	$password = $_POST['password'];
	$db_host = "localhost";
	$db_usuario ="root";
	$db_password="";
	$db_nombre = "alumnos";
	$conexion = @mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre) or die("Connecion failed". mysqli_connect_error());


		$sql = "SELECT user , password FROM alumno";
		$result = mysqli_query($conexion, $sql);

		$usuario_registrado = false;
		$password_correcta = false;

		while($mostrar = mysqli_fetch_array($result)){
			if($usuario == $mostrar['user']){
				$usuario_registrado = true;
				if($password == $mostrar['password']){
					$password_correcta = true;
				} else {
					$password_correcta = false;
				}
			}
		}

		if($password_correcta){
			header('Location: Alumno.php?user='.$usuario);
		}

		if($usuario_registrado && !$password_correcta){
			?>
			<script>
				alert("Contraseña incorrecta");
			</script>
			<?php
		}

		if(!$usuario_registrado && !$password_correcta){ 
			?>
			<script>
				alert("Usuario no registrado");
			</script>
			<?php
		}
}
?>