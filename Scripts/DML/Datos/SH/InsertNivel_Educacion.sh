line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
NIVEL_EDUCACION_ID=$(getField 1)
GRADO=$(getField 2)
cat <<- EOF
into NIVEL_EDUCACION
(NIVEL_EDUCACION_ID, GRADO)
values
($NIVEL_EDUCACION_ID, '$GRADO')
EOF
done
echo "SELECT 1 from DUAL;"
