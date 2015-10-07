line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
OCUPACION_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into OCUPACION
(OCUPACION_id, NOMBRE)
values
($OCUPACION_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
