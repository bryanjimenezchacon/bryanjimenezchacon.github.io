line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
FRECUENCIA_EJERCICIO_id=$(getField 1)
RANGO=$(getField 2)
cat <<- EOF
into FRECUENCIA_EJERCICIO
(FRECUENCIA_EJERCICIO_id, RANGO)
values
($FRECUENCIA_EJERCICIO_id, '$RANGO')
EOF
done
echo "SELECT 1 from DUAL;"
