line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
CONTEXTURA_id=$(getField 1)
TIPO=$(getField 2)
cat <<- EOF
into CONTEXTURA
(CONTEXTURA_id, TIPO)
values
($CONTEXTURA_id, '$TIPO')
EOF
done
echo "SELECT 1 from DUAL;"
