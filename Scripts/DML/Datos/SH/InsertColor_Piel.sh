line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
COLOR_PIEL_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into COLOR_PIEL
(COLOR_PIEL_id, NOMBRE)
values
($COLOR_PIEL_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
