<?php
 // CONEXION Y VARIABLES
date_default_timezone_set('America/Costa_Rica');
$c = oci_connect("ge", "ge", "localhost/BDMATCHME");
	$titulo = $_POST['titulo_evento'];
	$lugar = $_POST['lugar_evento'];
	$ciudad = intval ($_POST['combo_CIUDAD']);
	$to = strtotime($_POST['fecha_evento']);
	$fecha = date('d/m/y', strtotime($_POST['fecha_evento']));
	$hora = $_POST['hora_evento'];
	$descripcion = $_POST['descripcion'];

            $result = $_POST['taskOption'];
            $result_explode = explode('|', $result);


	
// Insertar Datos
$query = OCI_Parse($c, "insert into EVENTO (EVENTO_ID,NOMBRE, LUGAR, DESCRIPCION, FECHA, HORA) values (incremento_evento.nextval, :para2, :para3, :para4, :para5, :para6)");
    OCI_Bind_By_Name($query, ":para2",$titulo); //Ligar los parámetros oracle con variables de PHP 
    OCI_Bind_By_Name($query, ":para3", $lugar); 
    OCI_Bind_By_Name($query, ":para4", $descripcion);
    OCI_Bind_By_Name($query, ":para5", $fecha);
    OCI_Bind_By_Name($query, ":para6", $hora);

//Ejecutar la sentencia para insertar    
$r = OCI_Execute($query);

OCI_Free_Statement($query); //Liberar sentencia
	


	echo $selectOption;
	echo "<br>";
	echo $to; echo gettype($to);
	echo gettype($titulo);
echo "<br>";	
echo gettype($lugar);
echo "<br>";
	echo $ciudad;echo gettype($ciudad);
	echo "<br>";
	echo gettype($fecha);
echo "<br>";
	echo gettype($hora);
echo "<br>";
	echo gettype($descripcion);

	        echo $result_explode[0]."<br />";echo "<br>";
            echo $result_explode[1]."<br />";
?>