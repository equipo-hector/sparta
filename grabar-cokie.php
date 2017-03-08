<?php
	setcookie("idioma_solicitado",$_GET["idioma"],time()+86400,"/");
	header("location: usar-cookie.php");
?>