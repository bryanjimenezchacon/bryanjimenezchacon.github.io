f(){
cat > ${1}_Persona_DisponibleX${2}.sql <<- END
	create table PERSONA_DISPONIBLEX${2}
	(
	  username		VARCHAR2(10),
	  es_real		VARCHAR2(1),	
	  CONSTRAINT fk_perdispx${2}_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
	  ${2}_id		NUMBER,
	  CONSTRAINT fk_perdispx${2}_${2} FOREIGN KEY (${2}_id) REFERENCES ${2}(${2}_id)
	);
END
}

tablas="Ocupacion Color_Pelo Idioma Religion Mascota Ejercicio Interes"
i=0
for tabla in $tablas
do
	echo "Se está creando la tabla #$i ${tabla}..."
	f $i $tabla
	let i+=1
done


