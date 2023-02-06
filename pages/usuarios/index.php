<?php include"classusuario.php";
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
$_SESSION['usuario']->getprivilegio(){
  header("Location: ../usuarios/");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	  <!-- // Este es el link necesario para conectarse a la CDN de bootstrap -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
	  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="StyleSheet" href="../MUNDIAL/styles/styles.css" type="text/css">
	<title>LGV deportes</title>
</head>
<body bgcolor="#FE0000">
	<!-- aca empieza el navbar de Bootstrap-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">INICIO</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="./pages/login.html">LOGIN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./pages/formulario mundial.html">CONTACTENOS</a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							MAS INFORMACIÓN
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="./pages/fixture.html">FIXTURE</a></li>
							<li><a class="dropdown-item" href="https://www.tycsports.com/mundial/mascota-del-mundial-qatar-2022-cuando-se-presenta-y-que-se-sabe-id423873.html" target="_blank">MASCOTA DEL MUNDIAL</a></li>
							<li><a class="dropdown-item" href ="https://www.tycsports.com/" target="_blank">PARTIDOS EN VIVO</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Acá termina de navbar de Bootstrap -->
	<!--encabezado-->
		<div id="recuadro1">	
		<h1 align="center" ><font color="#FFFFFF">LGV deportes</font></h1>
		</div>
<table border="1" bgcolor="#860037 " align="center"><!--tabla-->
<!--columna imagen-->
	</font>
		<center><img src="../MUNDIAL/assets/icon_flags/logo-de-qatar-ST.jpg"></a>
	<h3>HISTORIA DEL LOGO DEL MUNDIAL</h3>
	<div id="recuadro2">
			<p>
				<font color="#FFFFFF">
			Desde la primera Copa del Mundo en el año 1930, cada edición del mayor espectáculo futbolístico adoptó su emblema como una identidad visual distintiva.
			El logo del Mundial de Qatar se puso a la altura de las expectativas con un diseño tridimensional único.
			Según los dichos de los organizadores, encarna un evento que conecta e involucra a numerosos países del planeta entero.
			A su vez, muestra al mundo elementos fieles representantes de la cultura árabe.		
			<br>
	</font>
		</p>
	</div>
		<br>
		<hr>
		</center>
	
</table>
<!--// Estos son los scripts necesarios indicados por bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
<!-- comienza el pie de pagina -->
<footer>
<div id="footer">
	<td>
	<font color="#000000">
	<center>
		<h6>
		ROLLING CODE SCHOOL<br>
		VIDES LEONARDO GABRIEL<br>
		AÑO 2022
		</h6>
	</center>
	</font>
	</td>
</div>
</footer>
</html>