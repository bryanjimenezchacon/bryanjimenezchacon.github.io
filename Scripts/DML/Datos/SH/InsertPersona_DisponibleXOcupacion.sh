line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
USERNAME=$(getField 1)
OCUPACION_ID=$(getField 2)
cat <<- EOF
into PERSONA_DISPONIBLEXOCUPACION
(USERNAME, OCUPACION_ID)
values
('$USERNAME', $OCUPACION_ID)
EOF
done
echo "SELECT 1 from DUAL;"
