line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
SALARIO_id=$(getField 1)
RANGO=$(getField 2)
cat <<- EOF
into SALARIO
(SALARIO_id, RANGO)
values
($SALARIO_id, '$RANGO')
EOF
done
echo "SELECT 1 from DUAL;"
