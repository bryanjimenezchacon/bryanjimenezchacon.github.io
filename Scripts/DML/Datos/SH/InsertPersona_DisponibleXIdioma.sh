line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
USERNAME=$(getField 1)
IDIOMA_ID=$(getField 2)
cat <<- EOF
into PERSONA_DISPONIBLEXIDIOMA
(USERNAME, IDIOMA_ID)
values
('$USERNAME', $IDIOMA_ID)
EOF
done
echo "SELECT 1 from DUAL;"
