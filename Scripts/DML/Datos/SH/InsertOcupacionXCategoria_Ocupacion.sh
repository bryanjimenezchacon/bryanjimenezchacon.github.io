line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
OCUPACION_ID=$(getField 1)
CATEGORIA_OCUPACION_ID=$(getField 2)
cat <<- EOF
into OCUPACIONXCATEGORIA_OCUPACION
(OCUPACION_ID, CATEGORIA_OCUPACION_ID)
values
($OCUPACION_ID, $CATEGORIA_OCUPACION_ID)
EOF
done
echo "SELECT 1 from DUAL;"
