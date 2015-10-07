line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
ESTADO_CIVIL_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into ESTADO_CIVIL
(ESTADO_CIVIL_id, NOMBRE)
values
($ESTADO_CIVIL_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
