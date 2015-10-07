line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
EJERCICIO_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into EJERCICIO
(EJERCICIO_id, NOMBRE)
values
($EJERCICIO_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
