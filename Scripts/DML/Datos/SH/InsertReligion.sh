line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
RELIGION_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into RELIGION
(RELIGION_id, NOMBRE)
values
($RELIGION_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
