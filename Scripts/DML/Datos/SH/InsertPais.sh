line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
PAIS_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into PAIS
(PAIS_id, NOMBRE)
values
($PAIS_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
