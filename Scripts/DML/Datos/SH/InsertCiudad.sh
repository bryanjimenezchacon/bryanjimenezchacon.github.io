line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
CIUDAD_id=$(getField 1)
NOMBRE=$(getField 2)
PAIS_ID=$(getField 3)
cat <<- EOF
into CIUDAD
(CIUDAD_id, NOMBRE, PAIS_ID)
values
($CIUDAD_id, '$NOMBRE', '$PAIS_ID')
EOF
done
echo "SELECT 1 from DUAL;"
