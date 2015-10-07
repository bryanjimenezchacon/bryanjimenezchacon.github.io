line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
INTERES_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into INTERES
(INTERES_id, NOMBRE)
values
($INTERES_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
