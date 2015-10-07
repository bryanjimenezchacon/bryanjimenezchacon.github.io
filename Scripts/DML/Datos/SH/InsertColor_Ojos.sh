line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
COLOR_OJOS_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into COLOR_OJOS
(COLOR_OJOS_id, NOMBRE)
values
($COLOR_OJOS_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
