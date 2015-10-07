line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
BEBEDOR_id=$(getField 1)
TIPO=$(getField 2)
cat <<- EOF
into BEBEDOR
(BEBEDOR_id, TIPO)
values
($BEBEDOR_id, '$TIPO')
EOF
done
echo "SELECT 1 from DUAL;"
