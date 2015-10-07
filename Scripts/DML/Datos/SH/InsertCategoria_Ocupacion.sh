line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
CATEGORIA_OCUPACION_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into CATEGORIA_OCUPACION
(CATEGORIA_OCUPACION_id, NOMBRE)
values
($CATEGORIA_OCUPACION_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
