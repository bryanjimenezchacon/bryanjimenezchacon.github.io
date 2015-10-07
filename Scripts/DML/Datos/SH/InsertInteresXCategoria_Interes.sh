line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
INTERES_ID=$(getField 1)
CATEGORIA_INTERES_ID=$(getField 2)
cat <<- EOF
into INTERESXCATEGORIA_INTERES
(INTERES_ID, CATEGORIA_INTERES_ID)
values
($INTERES_ID, $CATEGORIA_INTERES_ID)
EOF
done
echo "SELECT 1 from DUAL;"
