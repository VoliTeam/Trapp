<?php
function cabecera ( $titulo ){
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" href="./css/style.css">
	<title>Trapp</title>
</head>
<!-- Código HTML de la cabecera -->
<?php
}
function pie (){
?>
<!-- Código HTML del pié de página -->
<?php
}
?>

<!--Barra de ubicación-->
<?php
function navbar(){
	?>
	<div class="navbar_clearfix">
		Estas aqui
	</div>
<?php
}
?>


<!-- Código HTML del nav de página -->
<?php
function nav (){
?>
<div id="nav">
	<img src="./img/logo.png"/>
		<ul>
		  <a href="./index.php"><li>Inicio</li></a>
		  <a href="./form.php"><li>Crear</li></a>
		  <a href="./transform.php"><li>Transformar</li></a>
		  <a href="./cuestionario.php"><li>Realizar</li></a>
		  <li>Buscar</li>
		</ul>
</div>
<?php
}
?>
