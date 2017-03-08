<!DOCTYPE html>
<html long="es">
	<head>
	<title>CONTACTO</title>
		<meta charset="utf-8"> 
		<link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<link rel="stylesheet" href="styleheet2.css"> 
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="scripprincipal2.js"></script>
	</head>
	<body background= "dark-wood-panels-1645.jpg" no repeat background-size="cover">
		<div id="contenido">
			<header>
				<hgroup>
				<h1>SPARTA SYSTEMS</h1>
				</hgroup>
							<nav>
								<ul>
									<li><a href="espanol.php">INICIO</a></li>
									<li><a href="rendimiento.php">RENDIMIENTO</a></li>
									<li><a href="contacto.php">CONTACTO</a></li>
									<li><a href="media.php">MEDIA</a></li>
								</ul>
							</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
					<h1>CONTACTO</h1>
					</hgroup>
					<form action="reg.php" method="Post" type="submit">
					<p> MANDANOS TUS COMENTARIOS, CALIFICANOS PARA TOMAR EN CUENTA TU OPINION GRACIAS POR SER PARTE DEL CAMBIO DIA DIA 
					DE NUESTRO SISTEMA.
					</p>
					<label for="nombre"> nombre </label>
					<input type="text" id="nombre" placeholder="escribe tu nombre" required>
					<br>
					<label for="Calificanos"> Calificanos</label>
					<input type="range" id="Calificanos" min="0" max="10" value="0">
					<label for="Fecha"> Fecha </label>
					<input type="date" id="Fecha">
					<input type="submit" value="enviardatos" id="submit">
					<input type="reset" value="Borrar">
					</form>
				</div>	
			</section>
			<footer>
				<canvas id="mi canvas"> </canvas>
				
			</footer>
		</div>
	</body>
</html>