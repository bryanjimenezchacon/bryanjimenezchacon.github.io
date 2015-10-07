line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
username=$(getField 1)
es_real=$(getField 2)
color_ojos_id=$(getField 3)
color_piel_id=$(getField 4)
contextura_id=$(getField 5)
nivel_educacion_id=$(getField 6)
estado_civil_id=$(getField 7)
fumador_id=$(getField 8)
bebedor_id=$(getField 9)
frecuencia_ejercicio_id=$(getField 10)
salario_id=$(getField 11)
altura=$(getField 12)
peso=$(getField 13)
num_hijos=$(getField 14)
quiere_hijos=$(getField 15)
cat <<- EOF
INTO PERSONA_DISPONIBLE (username, es_real, color_ojos_id, color_piel_id, contextura_id, nivel_educacion_id, estado_civil_id, fumador_id, bebedor_id, frecuencia_ejercicio_id, salario_id, altura, peso, num_hijos, quiere_hijos) VALUES ('${username}', '${es_real}', ${color_ojos_id}, ${color_piel_id}, ${contextura_id}, ${nivel_educacion_id}, ${estado_civil_id}, ${fumador_id}, ${bebedor_id}, $frecuencia_ejercicio_id, $salario_id, $altura, $peso, $num_hijos, '${quiere_hijos}')
EOF
done
echo "SELECT 1 from DUAL;"
