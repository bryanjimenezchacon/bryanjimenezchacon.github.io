line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
USERNAME=$(getField 1)
COLOR_PELO_ID=$(getField 2)
cat <<- EOF
into PERSONA_DISPONIBLEXCOLOR_PELO
(USERNAME, COLOR_PELO_ID)
values
('$USERNAME', $COLOR_PELO_ID)
EOF
done
echo "SELECT 1 from DUAL;"
