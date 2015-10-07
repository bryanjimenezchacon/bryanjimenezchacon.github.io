<?php

// Conectar al servicio XE (es deicr, la base de datos) en la máquina "localhost"
$conn = oci_connect("ge", "ge", "localhost/BDMATCHME");

$stid = oci_parse($conn, 'SELECT * FROM PERSONA');
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>