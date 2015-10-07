line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
GENERO_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into GENERO
(GENERO_id, NOMBRE)
values
($GENERO_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
