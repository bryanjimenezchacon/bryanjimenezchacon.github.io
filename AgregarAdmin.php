<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <link rel="shortcut icon" href="images\favicon.ico" >
   		<link rel="icon" type="image/gif" href="images\animated_favicon1.gif" >
<title>MatchMe.com - Agregar Admin</title>
<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>

<?php // CONEXION Y VARIABLES
$c = oci_connect("ge", "ge", "localhost/BDMATCHME");

$array_GENERO = oci_parse($c, 'SELECT * FROM GENERO');
oci_execute($array_GENERO);

$array_CIUDAD = oci_parse($c, 'SELECT * FROM CIUDAD');
oci_execute($array_CIUDAD);
?>


<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="PantallaInicio.PHP"><span>Match</span>Me.com<small>Free Dating website</small></a> </h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="PantallaAdmin.PHP">Inicio</a></li>
          <li class="active"><a href="AgregarAdmin.PHP">Agregar Administrador</a></li>
          <li><a href="CrearEvento.PHP">Crear Evento</a></li>
        <li><a href="ModificarFormularios.PHP">Modificar Formulario</a></li>
          <li><a href="index.PHP">Salir</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      
    </div>  
            <div class="mainbar">
          <div class="article">
            <h2><span>Agregar Administrador</span></h2><br>
            <div class="clr"></div>
                <form method="post" class="signup" action="ProcesarAgregarAdmin.php">
                    <fieldset class="textbox">
                    <br>
                    <label class="username">
                    <span>Nombre de usuario</span><br>
                    <input id="username" name="username" value="" type="text" placeholder="Usuario" required ><br>
                    </label></br>
                                        <label class="nombre">
                    <span>Nombre</span><br>
                    <input id="Nombre" name="nombre" value="" type="text" placeholder="Nombre" required ><br>
                    </label></br>
                                        <label class="Primer apellido">
                    <span>Primer apellido</span><br>
                    <input id="Primer apellido" name="Primer_apellido" value="" type="text" placeholder="Primer Apellido" required ><br>
                    </label></br>
                                        <label class="Segundo apellido">
                    <span>Segundo apellido</span><br>
                    <input id="Segundo apellido" name="Segundo_apellido" value="" type="text" placeholder="Segundo Apellido" required ><br>
                    </label>
                    </br></br>
                    <?php
echo "<select name=\"combo_genero\">";
while (OCIFetch($array_GENERO))//Ciclo para recorrer la tabla
{
$campo_GENERO=OCIResult($array_GENERO,2);//aca va la columna
echo "<option value=\"$campo_GENERO\">$campo_GENERO</option>";
}
echo "</select>";
?></td>
    <td><?php
echo "<select name=\"combo_CIUDAD\">";
while (OCIFetch($array_CIUDAD))//Ciclo para recorrer la tabla
{
$campo_CIUDAD=OCIResult($array_CIUDAD,2);//aca va la columna
echo "<option value=\"$campo_CIUDAD\">$campo_CIUDAD</option>";
}
echo "</select>";
?></td>
                    <br>
                    <label class="email">
                    <span>Email</span><br>
                    <input id="password" name="password" value="" type="password" placeholder="Email" required><br>
                    </label>
                    <label class="password">
                    <span>Contrase&ntilde;a</span><br>
                    <input id="password" name="password" value="" type="password" placeholder="Contrase&ntilde;a" required><br>
                    </label>
                    <label class="password">
                    <span>Repetir Contrase&ntilde;a</span><br>
                    <input id="password" name="password" value="" type="password" placeholder="Repetir Contrase&ntilde;a" required><br>
                    </label>
                    <br>
                    <input type="submit" id="go" value="Aceptar" >
                    <input  type="reset" id="cancel"value="Cancelar" >
                    </fieldset>
                </form>
          </div>
        </div>
 
        <div class="sidebar">
            
            <div class="gadget">
            <h2 class="star"><span>Mi Informacion</span></h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="">Admin</a></li>
              <li><a href="">Moises ALvarez</a></li>
              <li><a href="">moisesapotuguez@gmail.com</a></li>
          
            </ul>
          </div>
            
          <div class="gadget">
            <h2 class="star"><span>Mis Acciones</span></h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li class="active"><a href="#">Banear Usuarios</a></li>
              <li><a href="#">Actualizar Datos</a></li>
            </ul>
          </div>
      </div>
    </div>
    </div>
    </body>
</html>
