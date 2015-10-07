<html>
<head>
        <link rel="shortcut icon" href="images\favicon.ico" >
   		<link rel="icon" type="image/gif" href="images\animated_favicon1.gif" >
<title>MatchMe.com - Consultas</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="ConsultasAdmin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>

<?php // CONEXION Y VARIABLES
$c = oci_connect("ge", "ge", "localhost/BDMATCHME");

$array_INTERES = oci_parse($c, 'SELECT * FROM INTERES');
oci_execute($array_INTERES);

$array_EDAD = oci_parse($c, 'SELECT * FROM EDAD');
oci_execute($array_EDAD);

$array_GENERO = oci_parse($c, 'SELECT * FROM GENERO');
oci_execute($array_GENERO);

$array_PAIS = oci_parse($c, 'SELECT * FROM PAIS');
oci_execute($array_PAIS);

$array_CIUDAD = oci_parse($c, 'SELECT * FROM CIUDAD');
oci_execute($array_CIUDAD);

$array_ESTADO_CIVIL = oci_parse($c, 'SELECT * FROM ESTADO_CIVIL');
oci_execute($array_ESTADO_CIVIL);

$array_NIVEL_EDUCACION = oci_parse($c, 'SELECT * FROM NIVEL_EDUCACION');
oci_execute($array_NIVEL_EDUCACION);

$array_CONTEXTURA = oci_parse($c, 'SELECT * FROM CONTEXTURA');
oci_execute($array_CONTEXTURA);

$array_COLOR_OJOS = oci_parse($c, 'SELECT * FROM COLOR_OJOS');
oci_execute($array_COLOR_OJOS);

$array_COLOR_PELO = oci_parse($c, 'SELECT * FROM COLOR_PELO');
oci_execute($array_COLOR_PELO);

$array_IDIOMA = oci_parse($c, 'SELECT * FROM IDIOMA');
oci_execute($array_IDIOMA);

$array_RELIGION = oci_parse($c, 'SELECT * FROM RELIGION');
oci_execute($array_RELIGION);

$array_FUMADOR = oci_parse($c, 'SELECT * FROM FUMADOR');
oci_execute($array_FUMADOR);

$array_BEBEDOR = oci_parse($c, 'SELECT * FROM BEBEDOR');
oci_execute($array_BEBEDOR);

$array_FRECUENCIA_EJERCICIO = oci_parse($c, 'SELECT * FROM FRECUENCIA_EJERCICIO');
oci_execute($array_FRECUENCIA_EJERCICIO);

$array_CATEGORIA_OCUPACION = oci_parse($c, 'SELECT * FROM CATEGORIA_OCUPACION');
oci_execute($array_CATEGORIA_OCUPACION);

$array_OCUPACION = oci_parse($c, 'SELECT * FROM OCUPACION');
oci_execute($array_OCUPACION);

$array_SALARIO = oci_parse($c, 'SELECT * FROM SALARIO');
oci_execute($array_SALARIO);

$array_EJERCICIO = oci_parse($c, 'SELECT * FROM EJERCICIO');
oci_execute($array_EJERCICIO);

$array_CATEGORIA_INTERES = oci_parse($c, 'SELECT * FROM CATEGORIA_INTERES');
oci_execute($array_CATEGORIA_INTERES);



?>  
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="PantallaUsuarioHtml.PHP"><span>Match</span>Me.com<small>Free Dating website</small></a> </h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="PantallaUsuarioHtml.PHP">Inicio</a></li>
         
           <li><a href="Match.PHP">Match</a></li>
          <li><a href="Perfil.PHP">Perfil</a></li>
          <li><a href="index.PHP">Salir</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2><span>Filtros de Búsqueda</span></h2>
		<form>
		Nombre:
		<input type="text" name="Nombre"><br>
		Primer apellido:
		<input type="text" name="Apellido1"><br>
		Segundo apellido:
		<input type="text" name="Apellido2"><br>
		Email:
		<input type="text" name="Email"><br>
		Mínimo de winks:
		<input type="text" name="MinWinks"><br>
		Máximo de winks:
		<input type="text" name="MaxWinks"><br>
		Top de winks:
		<select>
		<option value="10">10</option>
		<option value="20">20</option>
		<option value="30">30</option>
		<option value="40">40</option>
		<option value="50">50</option>
		</select>
		<br>

		<table>
		<tr>
		  <th>Rango de edad</th>
		  <th>Género</th>
		  <th>País</th>
		  <th>Ciudad</th>
		  <th>Estado civil</th>
		  <th>Nivel más alto de educación</th>
		</tr>
		<tr>
		<td>
		<?php
echo "<select MULTIPLE name=\"combo_edad\">";
while (OCIFetch($array_EDAD))//Ciclo para recorrer la tabla
{
$campo_EDAD=OCIResult($array_EDAD,2);//aca va la columna
echo "<option value=\"$campo_EDAD\">$campo_EDAD</option>";
}
echo "</select>";
?>
</td>

		<td>		
		<?php
echo "<select MULTIPLE name=\"combo_genero\">";
while (OCIFetch($array_GENERO))//Ciclo para recorrer la tabla
{
$campo_GENERO=OCIResult($array_GENERO,2);//aca va la columna
echo "<option value=\"$campo_GENERO\">$campo_GENERO</option>";
}
echo "</select>";
?></td>

		<td><?php
echo "<select MULTIPLE name=\"combo_PAIS\">";
while (OCIFetch($array_PAIS))//Ciclo para recorrer la tabla
{
$campo_PAIS=OCIResult($array_PAIS,2);//aca va la columna
echo "<option value=\"$campo_PAIS\">$campo_PAIS</option>";
}
echo "</select>";
?></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_CIUDAD\">";
while (OCIFetch($array_CIUDAD))//Ciclo para recorrer la tabla
{
$campo_CIUDAD=OCIResult($array_CIUDAD,2);//aca va la columna
echo "<option value=\"$campo_CIUDAD\">$campo_CIUDAD</option>";
}
echo "</select>";
?></td>


		<td><?php
echo "<select MULTIPLE name=\"combo_ESTADO_CIVIL\">";
while (OCIFetch($array_ESTADO_CIVIL))//Ciclo para recorrer la tabla
{
$campo_ESTADO_CIVIL=OCIResult($array_ESTADO_CIVIL,2);//aca va la columna
echo "<option value=\"$campo_ESTADO_CIVIL\">$campo_ESTADO_CIVIL</option>";
}
echo "</select>";
?></td>

		<td><?php
echo "<select MULTIPLE name=\"combo_NIVEL_EDUCACION\">";
while (OCIFetch($array_NIVEL_EDUCACION))//Ciclo para recorrer la tabla
{
$campo_NIVEL_EDUCACION=OCIResult($array_NIVEL_EDUCACION,2);//aca va la columna
echo "<option value=\"$campo_NIVEL_EDUCACION\">$campo_NIVEL_EDUCACION</option>";
}
echo "</select>";
?></td>
		</table>
		<br>
		<table>
		<tr>
		  <th>Contextura</th>
		  <th>Altura (cm)</th>
		  <th>Peso (kg)</th>
		  <th>Color de ojos</th>
		  <th>Color de pelo</th>
		</tr>
		<tr>
		<td><?php
echo "<select MULTIPLE name=\"combo_CONTEXTURA\">";
while (OCIFetch($array_CONTEXTURA))//Ciclo para recorrer la tabla
{
$campo_CONTEXTURA=OCIResult($array_CONTEXTURA,2);//aca va la columna
echo "<option value=\"$campo_CONTEXTURA\">$campo_CONTEXTURA</option>";
}
echo "</select>";
?></td>
		<td><select multiple>
		  <option value="0">Menos que 140</option>
		  <option value="1">141-150</option>
		  <option value="2">151-160</option>
		  <option value="3">161-170</option>
		  <option value="4">171-180</option>
		  <option value="5">181-190</option>
		  <option value="6">191-200</option>
		  <option value="7">201 o más</option>
		</select></td>
		<td><select multiple>
		  <option value="0">40 o menos</option>
		  <option value="1">41-45</option>
		  <option value="2">46-50</option>
		  <option value="3">51-55</option>
		  <option value="4">56-60</option>
		  <option value="5">61-65</option>
		  <option value="6">66-70</option>
		  <option value="7">71-75</option>
		  <option value="8">76-80</option>
		  <option value="9">81-85</option>
		  <option value="10">86-90</option>
		  <option value="11">91-95</option>
		  <option value="12">96-100</option>
		  <option value="13">101-105</option>
		  <option value="14">106-110</option>
		  <option value="15">111-115</option>
		  <option value="16">116-120</option>
		  <option value="17">121-125</option>
		  <option value="18">126-130</option>
		  <option value="19">131-135</option>
		  <option value="20">136-140</option>
		  <option value="21">141-145</option>
		  <option value="22">146-150</option>
		  <option value="23">151-155</option>
		  <option value="24">156-160</option>
		  <option value="25">161-165</option>
		  <option value="26">166-170</option>
		  <option value="27">171-175</option>
		  <option value="28">176-180</option>
		  <option value="29">181-185</option>
		  <option value="30">186-190</option>
		  <option value="31">191-195</option>
		  <option value="32">196-200</option>
		  <option value="33">201 o más</option>
		</select></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_COLOR_OJOS\">";
while (OCIFetch($array_COLOR_OJOS))//Ciclo para recorrer la tabla
{
$campo_COLOR_OJOS=OCIResult($array_COLOR_OJOS,2);//aca va la columna
echo "<option value=\"$campo_COLOR_OJOS\">$campo_COLOR_OJOS</option>";
}
echo "</select>";
?></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_COLOR_PELO\">";
while (OCIFetch($array_COLOR_PELO))//Ciclo para recorrer la tabla
{
$campo_COLOR_PELO=OCIResult($array_COLOR_PELO,2);//aca va la columna
echo "<option value=\"$campo_COLOR_PELO\">$campo_COLOR_PELO</option>";
}
echo "</select>";
?></td>
		</table>
		<br>
		<table>
		<tr>
		  <th>Idioma</th>
		  <th>Religión</th>
		  <th>Fuma tabaco</th>
		  <th>Bebe alcohol</th>
		  <th>Frecuencia en que se ejercita</th>
		</tr>
		<tr>
		<td>
		<?php
echo "<select MULTIPLE name=\"combo_IDIOMA\">";
while (OCIFetch($array_IDIOMA))//Ciclo para recorrer la tabla
{
$campo_IDIOMA=OCIResult($array_IDIOMA,2);//aca va la columna
echo "<option value=\"$campo_IDIOMA\">$campo_IDIOMA</option>";
}
echo "</select>";
?>
</td>

		<td>		<?php
echo "<select MULTIPLE name=\"combo_RELIGION\">";
while (OCIFetch($array_RELIGION))//Ciclo para recorrer la tabla
{
$campo_RELIGION=OCIResult($array_RELIGION,2);//aca va la columna
echo "<option value=\"$campo_RELIGION\">$campo_RELIGION</option>";
}
echo "</select>";
?></td>
		<td>		<?php
echo "<select MULTIPLE name=\"combo_FUMADOR\">";
while (OCIFetch($array_FUMADOR))//Ciclo para recorrer la tabla
{
$campo_FUMADOR=OCIResult($array_FUMADOR,2);//aca va la columna
echo "<option value=\"$campo_FUMADOR\">$campo_FUMADOR</option>";
}
echo "</select>";
?></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_BEBEDOR\">";
while (OCIFetch($array_BEBEDOR))//Ciclo para recorrer la tabla
{
$campo_BEBEDOR=OCIResult($array_BEBEDOR,2);//aca va la columna
echo "<option value=\"$campo_BEBEDOR\">$campo_BEBEDOR</option>";
}
echo "</select>";
?></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_FREQUENCIA_EJERCICIO\">";
while (OCIFetch($array_FRECUENCIA_EJERCICIO))//Ciclo para recorrer la tabla
{
$campo_FRECUENCIA_EJERCICIO=OCIResult($array_FRECUENCIA_EJERCICIO,2);//aca va la columna
echo "<option value=\"$campo_FREQUENCIA_EJERCICIO\">$campo_FRECUENCIA_EJERCICIO</option>";
}
echo "</select>";
?></td>
		</table>
		<br>
		<table>
		<tr>
		  <th>Número de hijos</th>
		  <th>¿Quiere hijos?</th>
		  <th>Categorías de ocupación</th>
		  <th>Ocupación</th>
		  <th>Salario</th>
		</tr>
		<tr>
		<td><select multiple>
		  
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		  <option value="11">11</option>
		  <option value="12">12</option>
		  <option value="13">13</option>
		  <option value="14">14</option>
		  <option value="15">15</option>

		  </select></td>
		<td><select multiple>
		  
		  <option value="0">Sí</option>
		  <option value="1">No</option>
		</select></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_CATEGORIA_OCUPACION\">";
while (OCIFetch($array_CATEGORIA_OCUPACION))//Ciclo para recorrer la tabla
{
$campo_CATEGORIA_OCUPACION=OCIResult($array_CATEGORIA_OCUPACION,2);//aca va la columna
echo "<option value=\"$campo_CATEGORIA_OCUPACION\">$campo_CATEGORIA_OCUPACION</option>";
}
echo "</select>";
?></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_OCUPACION\">";
while (OCIFetch($array_OCUPACION))//Ciclo para recorrer la tabla
{
$campo_OCUPACION=OCIResult($array_OCUPACION,2);//aca va la columna
echo "<option value=\"$campo_OCUPACION\">$campo_OCUPACION</option>";
}
echo "</select>";
?></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_SALARIO\">";
while (OCIFetch($array_SALARIO))//Ciclo para recorrer la tabla
{
$campo_SALARIO=OCIResult($array_SALARIO,2);//aca va la columna
echo "<option value=\"$campo_SALARIO\">$campo_SALARIO</option>";
}
echo "</select>";
?></td>
		</table>
		<table>
		<tr>
		  <th>Ejercicio</th>
		  <th>Categorías de Interés</th>
		  <th>Interés</th>
		</tr>
		<td><?php
echo "<select MULTIPLE name=\"combo_EJERCICIO\">";
while (OCIFetch($array_EJERCICIO))//Ciclo para recorrer la tabla
{
$campo_EJERCICIO=OCIResult($array_EJERCICIO,2);//aca va la columna
echo "<option value=\"$campo_EJERCICIO\">$campo_EJERCICIO</option>";
}
echo "</select>";
?></td>
		<td><?php
echo "<select MULTIPLE name=\"combo_CATEGORIA_INTERES\">";
while (OCIFetch($array_CATEGORIA_INTERES))//Ciclo para recorrer la tabla
{
$campo_CATEGORIA_INTERES=OCIResult($array_CATEGORIA_INTERES,2);//aca va la columna
echo "<option value=\"$campo_CATEGORIA_INTERES\">$campo_CATEGORIA_INTERES</option>";
}
echo "</select>";
?></td>
		<td>
<?php
echo "<select MULTIPLE name=\"combo_prueba\">";
while (OCIFetch($array_INTERES))//Ciclo para recorrer la tabla
{
$campo_interes=OCIResult($array_INTERES,2);//aca va la columna
echo "<option value=\"$campo_interes\">$campo_interes</option>";
}
echo "</select>";
?>

	
		</td>
		</table>
		<br>
		<b>Mascotas:</b> <br> <br>
		Gato:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		Perro:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		Pez:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		Loro:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		Mono:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		Iguana:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		Búho:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		Sapo:
		<select>
		  <option value="0">0</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
		</select>
		<br><br><input type="submit" value="Consultar usuarios">
		</form>
          </div>

	<div class="menu_nav"> </div>
        <div class="clr"></div>
          <div class="article">
            <h2><span>Resultados de Busqueda</span></h2>
            <div class="clr"></div>
            <p>Cantidad: 2 usuarios</p>
            <div class="clr"></div>
          </div>
            <div class="article">
            <h2><span>Kristin Kreuk</span></h2>
            <div class="clr"></div>
            <img src="https://images.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F_6OJy2dJt-eU%2FTPEbZQg9pMI%2FAAAAAAAADng%2FC_XwQj1g5vw%2Fs1600%2Fatraer%252Bcon%252Bla%252Bmirada%252Ba%252Buna%252Bmujer.jpg&f=1" width="313" height="193" alt="" />
            <p class="spec"><a href="#" class="rm fl">Winks (35)</a></p>
            <div class="clr"></div>
          </div>
          <div class="article">
            <h2><span>Emma Roberts</span></h2>
            <div class="clr"></div>
            <img src="https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fmetodosparaligar.com%2Fwp-content%2Fuploads%2F2011%2F08%2Ftecnica-para-seducir-una-mujer.jpg&f=1" width="313" height="193" alt="" />
            <p class="spec"><a href="#" class="rm fl">Winks (42)</a></p>
            <div class="clr"></div>
          </div>
        </div>
        <div class="sidebar">
            
            <div class="gadget">
            <h2 class="star"><span>Mi Información</span></h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="">Moises ALvarez</a></li>
              <li><a href="">moisesapotuguez@gmail.com</a></li>
          
            </ul>
          </div>
            
          <div class="gadget">
            <h2 class="star"><span>Mis Acciones</span></h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              
              <li><a href="#">Actualizar Datos</a></li>
            </ul>
          </div>
          
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
