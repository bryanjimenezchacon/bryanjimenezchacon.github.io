#! /bin/bash
genConsulta(){
	tabla=$1
	columna=$2
	cat > get_${tabla,,}.sql <<- EOF
	CREATE OR REPLACE FUNCTION get_${tabla,,}(p${tabla^^}_ID number)
	       return VARCHAR2
	       as nombre varchar2(30);
	       BEGIN
		 SELECT NOMBRE
		 INTO nombre
		 FROM ${tabla^^}
		 WHERE ${tabla^^}_ID = p${tabla^^}_ID;
	       RETURN (nombre);
	       commit;
	       END get_${tabla,,};
	EOF
}

while read p; do
	tabla=$(echo $p | cut -f1)
	columna=$(echo $p | cut -f2)
	genConsulta $tabla $columna
done < $1
