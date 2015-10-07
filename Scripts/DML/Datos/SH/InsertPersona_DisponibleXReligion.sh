line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
USERNAME=$(getField 1)
RELIGION_ID=$(getField 2)
cat <<- EOF
into PERSONA_DISPONIBLEXRELIGION
(USERNAME, RELIGION_ID)
values
('$USERNAME', $RELIGION_ID)
EOF
done
echo "SELECT 1 from DUAL;"
