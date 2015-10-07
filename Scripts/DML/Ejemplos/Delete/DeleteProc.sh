for delete in *.sql;
do
	tabla=${delete/DELETE_/}
	tabla=${tabla/.sql/}

	cat > ../Procedimientos/$delete <<- EOF
	create or replace procedure DELETE_${tabla}( p${tabla}_ID IN NUMBER) is
	begin
	  delete from $tabla
	      where ${tabla}_id = p${tabla}_ID;
        end DELETE_${tabla};
	EOF
done
