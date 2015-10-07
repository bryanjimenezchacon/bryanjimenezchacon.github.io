line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
FUMADOR_id=$(getField 1)
TIPO=$(getField 2)
cat <<- EOF
into FUMADOR
(FUMADOR_id, TIPO)
values
($FUMADOR_id, '$TIPO')
EOF
done
echo "SELECT 1 from DUAL;"
