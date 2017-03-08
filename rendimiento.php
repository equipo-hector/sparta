<!DOCTYPE html>
<html long="es">
	<head>
	<title>RENDIMIENTO</title>
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
					<h1>RENDIMIENTO</h1>
					</hgroup>
					<p>RENDIMIENTO DE LOS EMPLEADOS: <meter min="0" max="100" value="70">70%</meter></p>
					<p>RENDIMIENTO DE PROVEEDORES: <meter min="0" max="100" value="80">80%</meter></p>
					<p>RENDIMIENTO DE LAS VENTAS: <meter min="0" max="100" value="90">90%</meter></p>
					<p>RENDIMIENTO DEL SISTEMA: <meter min="0" max="100" value="100">100%</meter></p>
					<form>
	<label>autor</label>
	<input type="text" name="autor"/>
	<br>
	<label>tipologia documental</label>
	<input type="text" name="tipologia"/>
	<br>
	<label>fecha</label>
	<br>
	<label>Numero de fojas</label>
	<input type="text" name="numerofojas"/>
	<br>
	<label>tamaño de fojas</label>
	<input type="text" name="tamanofojas"/>
	<br>
	<label>Personas a las que se dirigue</label>
	<input type="text" name="dirigue"/>
	<br>
	<label>Sintesis</label>
	<textarea></textarea>
	<br>
	<button type="submit">Imagen</button><br><br>
	<label>Personas</label>
	<textarea></textarea>
	<br>
	<label>Lenguaje</label>
	<textarea></textarea>
	<br>
	<label>Temas</label>
	<textarea></textarea>
	<br>
	<label>Observaciones</label>
	<textarea></textarea>
	<br>
	<label>Coleccion</label>
	<input type="text" name="coleccion"/>
	<br>
	<label>Calificacion</label>
	<input type="text" name="calificacion"/>
	<br>
	<button>limpiar Forma</button>
	<button>agregar</button>
	</form>
				</div>	
			</section>
			<footer>
				<canvas id="mi canvas"> </canvas>
				
			</footer>
		</div>
	</body>
</html>