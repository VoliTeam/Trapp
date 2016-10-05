<!DOCTYPE html>
<html>
<?
include 'header.php' ;
cabecera ( 'Trapp' );
?>
<!-- C?digo HTML de la p?gina -->
<?
pie ();
?>
<body>

<div id="wrapper">

	<?
	nav();
	?>


	<span id="comprobar">
	</span>


<div id="leftpanel">
w
</div>


<div id="centerpanel">

	<h1>Trapp - Proyecto de desarrollo de aplicaciones web</h1>

<h3>¿Para qué sirve?</h3>
Trapp es un programa escrito en HTML, JS y CSS que sirve para transformar texto plano de formato aiken a cuestionario en html

<h3>Version actual</h3>
La versión actual está en ALFA. Realiza la siguiente función:</br>
-Transforma el texto plano (dentro de etiquetas P en el código html) en un cuestionario html.

El formato es el siguiente:</br>

¿Qué es el web hosting?</br>
A) Un tipo de correo electrónico.</br>
B) Un servicio que provee un sistema para almacenar información vía web.</br>
C) Un lenguaje de programación.</br>
D) Ninguna es correcta.</br>
ANSWER: B


Y lo transforma en un formulario html.


<h3>Proximas funciones:</h3>

<ul>
<li>Opción de añadir preguntas en el formato especificado mediante un formulario</li>
<li>Opción de validar, corregir y evaluar con nota el cuestionario</li>
<li>Mejorar el diseño con CSS3</li>
<li>Control de bugs y errores</li>
</ul>


</br>


</div>

<div id="rightpanel">
			<button type="button" name="button" onclick="generarFormulario();">Transformar</button>
</div>

</div>
</body>
</html>
