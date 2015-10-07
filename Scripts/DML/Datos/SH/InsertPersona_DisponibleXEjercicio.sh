line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
USERNAME=$(getField 1)
EJERCICIO_ID=$(getField 2)
cat <<- EOF
into PERSONA_DISPONIBLEXEJERCICIO
(USERNAME, EJERCICIO_ID)
values
('$USERNAME', $EJERCICIO_ID)
EOF
done
echo "SELECT 1 from DUAL;"
