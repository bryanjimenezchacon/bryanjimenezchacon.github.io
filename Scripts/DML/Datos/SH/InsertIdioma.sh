line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
IDIOMA_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into IDIOMA
(IDIOMA_id, NOMBRE)
values
($IDIOMA_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
