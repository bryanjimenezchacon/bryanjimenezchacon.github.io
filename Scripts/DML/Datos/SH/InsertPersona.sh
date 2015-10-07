line=""
getField(){
	echo "$line" | cut -f${1}
}

echo "INSERT ALL"
while read line
do
username=$(getField 1)
es_admin=$(getField 2)
nacimiento=$(getField 3)
primer_apellido=$(getField 4)
segundo_apellido=$(getField 5)
nombre=$(getField 6)
genero_id=$(getField 7)
ciudad_id=$(getField 8)
slogan=$(getField 9)
cat <<- EOF
INTO persona (username, es_admin, nacimiento, primer_apellido, segundo_apellido, nombre, genero_id, ciudad_id, slogan) VALUES ('${username}', '${es_admin}', to_date('${nacimiento}','MM/DD/YY'), '${primer_apellido}', '${segundo_apellido}', '${nombre}', ${genero_id}, ${ciudad_id}, q'[${slogan}]' )
EOF
done
echo "SELECT 1 from DUAL;"
