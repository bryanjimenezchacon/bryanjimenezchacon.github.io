line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
COLOR_PELO_id=$(getField 1)
NOMBRE=$(getField 2)
cat <<- EOF
into COLOR_PELO
(COLOR_PELO_id, NOMBRE)
values
($COLOR_PELO_id, '$NOMBRE')
EOF
done
echo "SELECT 1 from DUAL;"
