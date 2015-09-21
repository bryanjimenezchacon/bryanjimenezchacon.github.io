for update in *.sql;
do
	tabla=${update/UPDATE_/}
	tabla=${tabla/.sql/}
	linea=$(grep -h -i set $update | sed 's/set //Ig' | sed 's/,/\n/g' | sed -r 's/=.*//g' | sed 's/ //g')

	campos=$(tr -cd , < $update | wc -c)
	for campo in $linea
	do
		echo $tabla : $campo
	done

#	campo=$( grep -h -i set $update | sed 's/set //Ig'  | awk '{print $1;}')
#	campo=${campo/=/}
	cat > ../Procedimientos/$update <<- EOF
	create or replace procedure UPDATE_${tabla}(p${campo} IN VARCHAR, p${tabla}_ID IN NUMBER) is
	begin
	  update $tabla
	    set $campo = p${campo}
	      where ${tabla}_id = p${tabla}_ID;
        end UPDATE_${tabla};
	EOF
done
