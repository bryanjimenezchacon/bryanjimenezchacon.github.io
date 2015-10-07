line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
USERNAME=$(getField 1)
MASCOTA_ID=$(getField 2)
CANTIDAD=$(getField 3)
cat <<- EOF
into PERSONA_DISPONIBLEXMASCOTA
(USERNAME, MASCOTA_ID, CANTIDAD)
values
('$USERNAME', $MASCOTA_ID, $CANTIDAD)
EOF
done
echo "SELECT 1 from DUAL;"
