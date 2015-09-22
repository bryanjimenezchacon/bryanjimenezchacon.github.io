create table PERSONA_DISPONIBLE
(
  username		VARCHAR2(10), CONSTRAINT fk_perdisp_persona FOREIGN KEY (username) REFERENCES persona(username),
  es_real		VARCHAR2(1),  CONSTRAINT bool_es_real CHECK (es_real in (0,1)),
--
  --Para cada username hay dos entradas en PERSONA_DISPONIBLE: el usuario real y su pareja ideal.
  CONSTRAINT pk_perdisp PRIMARY KEY (username, es_real),
--
--Verdes:
  color_ojos_id 	NUMBER,      CONSTRAINT fk_perdisp_color_ojos FOREIGN KEY (color_ojos_id) REFERENCES color_ojos(color_ojos_id),
  --color_pelo es n a n, dado que las personas pueden tener varios colores de pelo.
  color_piel_id 	NUMBER,      CONSTRAINT fk_perdisp_color_piel FOREIGN KEY (color_piel_id) REFERENCES color_piel(color_piel_id),
  contextura_id 	NUMBER,      CONSTRAINT fk_perdisp_contextura FOREIGN KEY (contextura_id) REFERENCES contextura(contextura_id),
--
--Naranjas:
  nivel_educacion_id 	NUMBER,      CONSTRAINT fk_perdisp_nivel_educacion FOREIGN KEY (nivel_educacion_id) REFERENCES nivel_educacion(nivel_educacion_id),
  --idioma y religion son n a n
  estado_civil_id 	NUMBER,      CONSTRAINT fk_perdisp_estado_civil FOREIGN KEY (estado_civil_id) REFERENCES estado_civil(estado_civil_id),
--
--Amarillos:
  fumador_id 		NUMBER,      CONSTRAINT fk_perdisp_fumador FOREIGN KEY (fumador_id) REFERENCES fumador(fumador_id),
  bebedor_id 		NUMBER,      CONSTRAINT fk_perdisp_bebedor FOREIGN KEY (bebedor_id) REFERENCES bebedor(bebedor_id),
  frecuencia_ejercicio_id 	NUMBER,      CONSTRAINT fk_perdisp_frec_ejercicio FOREIGN KEY (frecuencia_ejercicio_id) REFERENCES frecuencia_ejercicio(frecuencia_ejercicio_id),
  --ocupacion y mascota son n a n
  salario_id 		NUMBER,      CONSTRAINT fk_perdisp_salario FOREIGN KEY (salario_id) REFERENCES salario(salario_id)
--  
--Azules:
  --ejercicio e interes son n a n
);
alter table PERSONA_DISPONIBLE
add (
	altura		NUMBER,
	peso		NUMBER,
	num_hijos	NUMBER,
	quiere_hijos	VARCHAR2(1),  CONSTRAINT bool_quiere_hijos CHECK (es_real in (0,1))
);
alter table PERSONA_DISPONIBLE
add (
	CONSTRAINT PERSONA_DISPONIBLE_ES_REAL_NN check (ES_REAL IS NOT NULL) 
);
