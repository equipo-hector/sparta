<?php 
	$ link = mysql_connect("localhost:82","root","") or die ("<h2>no se conecta al servidor</h2>");;
	$ db= mysql_select_db("contacto_bd"$link) or die ("<h2>error de conexion</h2>"
	$nombre_$Post("nombre_del_usuario");
	$Email_$Post("e_mail_del_usuario");
	$Edad_$Post("edad_del_usuario");
	$Calificanos_$Post("calificacion_usuario");
	$Fecha_$Post("fecha_usuario");
	$req = (strlen ($nombre) * strlen($Email)*strlen($Edad)* strlen($Calificanos)*strlen($Fecha)) or die ("no se an llenado todos los campos ");
	
	mysql_query ("INSERT INTO contacto_bd Values("","$nombre","$Email","$Edad","$Calificanos","$Fecha","$link) or die("<h2>error de envio</h2>">
	
	echo
	<h2>enviado</h2>
	
	
?> 


