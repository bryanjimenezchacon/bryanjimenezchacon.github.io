<!DOCTYPE html>
<html>
	
	<head>
        <link rel="shortcut icon" href="images\favicon.ico" >
   		<link rel="icon" type="image/gif" href="images\animated_favicon1.gif" >
		<title>MatchMe.com - Terminos y Condiciones</title>
		<link rel="stylesheet" href="PantallaInicioCss.css"/>
	</head>
	<body>
	$c = oci_connect("ge", "ge", "MATCH");
	<header class="head1">
		<img src="images/logotipo.png" align="left" width=15%><img src="images/LogoOficialTrans.png" alt="" width="102" height="101" align="right">
		<form method="post" class="signup" action="ingreso.js">
			<table class="textbox" >
			<label class="username">
				<span>Usuario</span>
				<input id="username" name="username" value="" type="text" placeholder="Usuario" required >
			</label>
			<label class="password">
				<span>Contrase&ntilde;a</span>
				<input id="password" name="password" value="" type="password" placeholder="Contrase&ntilde;a" required>
			</label>
			<input type="submit" id="go" value="Login" onClick="window.location.href='PantallaUsuarioHtml.PHP'">
			</table>
		</form>
	</header>
		<section id="banner">
			<div class="formulario_registro">
				<h1>Bienvenido a MatchMe.com</h1>
				<p>MatchMe.com es un sitio de citas gratuito. El cual no tiene ninguna responsabilidad en los posibles acontecimietos generados por el uso de esta comunidad, y no aceptara ningun tipo de responsabilidad. Al pulsar el boton "Acepto" usted queda bajo su propia responsabilidad, y exonera de alguna responsabilidad a este sitio. </p>
			<form method="post" class="signup" action="Formularios/Formulario General/RegistroDatos.PHP">
				<fieldset class="textbox">
				<input type="submit" id="go" value="Acepto" onClick="window.location.href='Formularios/Formulario General/RegistroDatos.PHP'">
				<input  type="button" id="cancel" value="Cancelar" onClick="window.location.href='Index.PHP'">
				</fieldset>
			</form>
			</div>
		</section>
	</body>
</html>
