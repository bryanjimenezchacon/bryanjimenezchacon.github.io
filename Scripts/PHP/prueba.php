<?php

// Conectar al servicio XE (es deicr, la base de datos) en la máquina "localhost"
$conn = oci_connect("ge", "ge", "localhost/BDMATCHME");
if (!$conn) {
    $e = oci_error();
    echo $m ['message'], "\n";
	exit;
}
else {
	echo "Conecion con exito a Oracle!!! YEAH!! PHP RULEZ";
	
}
// Cerrar conexión
//oci_close(&conn);
?>