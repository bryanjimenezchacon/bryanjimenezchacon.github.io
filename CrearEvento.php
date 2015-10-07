<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <link rel="shortcut icon" href="images\favicon.ico" >
   		<link rel="icon" type="image/gif" href="images\animated_favicon1.gif" >
<title>MatchMe.com - Crear Evento</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
          <li class="active"><a href="PantallaAdmin.PHP">Inicio</a></li>
          <li><a href="AgregarAdmin.PHP">Agregar Administrador</a></li>
          <li class="active"><a href="CrearEvento.PHP">Crear Evento</a></li>
        <li><a href="ModificarFormularios.PHP">Modificar Formulario</a></li>
          <li><a href="ConsultasAdmin.PHP">Consultas</a></li>
          <li><a href="index.PHP">Salir</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2><span>Crear Evento</span></h2><br>
            <form method="post" class="signup" action="ProcesarCrearEvento.php">
            <fieldset class="textbox">
        <div class="clr"></div>
                <label id="label_input_26_0" for="input_26_0"> Título del evento: </label><br>
        <div id="cid_20" class="form-input jf-required">
          <input type="text" name="titulo_evento">
        </div><br>

        <div class="clr"></div>
                <label id="label_input_26_0" for="input_26_0"> Lugar: </label><br>
        <div id="cid_20" class="form-input jf-required">
          <input type="text" name="lugar_evento">
        </div><br>

            <div class="clr"></div>
                <label id="label_input_26_0" for="input_26_0"> Ciudad: </label><br>
        <div id="cid_20" class="form-input jf-required">
          <td><?php
echo "<select name=\"combo_CIUDAD\">";
while (OCIFetch($array_CIUDAD))//Ciclo para recorrer la tabla
{
$id_CIUDAD=OCIResult($array_CIUDAD,1);
$campo_CIUDAD=OCIResult($array_CIUDAD,2);//aca va la columna
echo "<option value=\"$id_CIUDAD\">$campo_CIUDAD</option>";
}
echo "</select>";
?></td>
        </div><br>
        <div class="clr"></div>
                <label id="label_input_26_0" for="input_26_0"> Fecha: </label><br>
        <div id="cid_20" class="form-input jf-required">
          <input type="date" name="fecha_evento">
        </div><br>
        <div class="clr"></div>
                <label id="label_input_26_0" for="input_26_0"> Hora: </label><br>
        <div id="cid_20" class="form-input jf-required">
          <input type="time" name="hora_evento">
        </div><br>
        <div class="clr"></div>
                <label id="label_input_26_0" for="input_26_0"> Descripcion: </label><br>
        <div id="cid_20" class="form-input jf-required">
         <textarea name="descripcion" rows="10" cols="50"></textarea>
        </div><br>
              <input type="submit" id="go" value="Crear" >
              <input  type="reset" id="cancel"value="Cancelar" >
            </fieldset>
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
              <li><a href="#">Banear Usuarios</a></li>
              <li><a href="ModificarFormularios.PHP">Actualizar Datos.</a></li>
            </ul>
          </div>
          
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</body>
</html>
