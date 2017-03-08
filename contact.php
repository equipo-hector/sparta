<!DOCTYPE html>
<html long="es">
	<head>
	<title>CONTACT</title>
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
									<li><a href="ingles.php">HOME </a></li>
									<li><a href="performance.php">PERFORMANCE</a></li>
									<li><a href="contact.php">CONTACT</a></li>
									<li><a href="media2.php">MEDIA</a></li>
								</ul>
							</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
					<h1>CONTACT</h1>
					</hgroup>
					<form action="reg.php" method="Post" type="submit">
					<p> SEND US YOUR COMMENTS, REVIEW US TO CONSIDER YOUR OPINION THANKS FOR BEING PART OF CHANGE DAY DAY 
						OUR SYSTEM.
					</p>
					<label for="nombre"> NAME </label>
					<input type="text" id="nombre" placeholder="Write your name" required>
					<br>
					<label for="Calificanos"> Review us </label>
					<input type="range" id="Calificanos" min="0" max="10" value="0">
					<label for="Fecha">DATE</label>
					<input type="date" id="Fecha">
					<input type="submit" value="Sending data " id="submit">
					<input type="reset" value="Delete">
					</form>
				</div>	
			</section>
			<footer>
				<canvas id="mi canvas"> </canvas>
				
			</footer>
		</div>
	</body>
</html>