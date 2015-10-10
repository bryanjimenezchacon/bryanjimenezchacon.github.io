<!DOCTYPE html>
<html>
	
	<head>
    	
   		<link rel="shortcut icon" href="images\favicon.ico" >
   		<link rel="icon" type="image/gif" href="images\animated_favicon1.gif" >
		<title>MatchMe.com</title>
		<link rel="stylesheet" href="PantallaInicioCss.css"/>
	</head>
	<body>
	$c = oci_connect("ge", "ge", "MATCH");
	<header class="head1">
    	<a href="https://www.facebook.com/matchmecr?fref=ts">
    	<img src="images/iconface.png" width="3%" height="3%" alt="" align = "left" hspace="10" vspace="5"/>
        <img src="images/LogoOficialTrans.png" width="3%" height="3%" alt="" align = "right" hspace="10" vspace="5"/>
		<img src="images/logotipo.png" align="left" width=15%>
		</a>
        <form method="post" class="signup" enctype = "text/plain" action="PantallaUsuarioHtml.PHP">
			<table class="textbox" >
			<label class="username">
				<span>Usuario</span>
                
				<input id="username" name="username" value="" type="text" placeholder="Usuario" required >
			</label>
			<label class="password">
				<span>Contrase&ntilde;a</span>
				<input type = "password" id="password" name="password_login" value="" type="password" placeholder="Contrase&ntilde;a" required>
			</label>
			<input type="submit" id="go" value="Login Usuario" onClick="window.location.href='PantallaUsuarioHtml.PHP'">			
            <input type="submit" id="go" value="Login Admin" onClick="window.location.href='PantallaAdmin.PHP'">
			</table>
		</form>
</header>
<section id="banner">
	<div class="inner">
				<h1>Bienvenido a MatchMe.com</h1>
				<p>Reg&iacute;strese para conocer corazones buscando romance</p>
			</div>
			<div class="formulario_registro">
			<form method="post" class="signup" action="Formularios/Formulario General/RegistroDatos.PHP">
				<fieldset class="textbox">
				<label class="username">
				<span>Usuario</span><br>
				<input id="username" name="username" value="" type="text" placeholder="Usuario" required ><br>
				</label>
				<label class="email">
				<span>Email</span><br>
				<input id="email" name="email" value="" type="text" placeholder="correo@ejemplo.com" required ><br>
				</label>
				<label class="password">
				<span>Contrase&ntilde;a</span><br>
				<input type = "password" id="password" name="password_sign_up" value="" type="password" placeholder="Contrase&ntilde;a" required><br>
				</label>
				<label class="retrypassword">
				<span>Repita su contrase&ntilde;a</span><br>
				<input type = "password" id="retry" name="retry" value="" type="password" placeholder="Repetir Contrase&ntilde;a" required><br>
				</label>
				<br>
				<input type="submit" id="go" value="Registrarse" onClick="window.location.href='Contrato.PHP'">
				</fieldset>
			</form>
			</div>
		</section>
	</body>
</html>
