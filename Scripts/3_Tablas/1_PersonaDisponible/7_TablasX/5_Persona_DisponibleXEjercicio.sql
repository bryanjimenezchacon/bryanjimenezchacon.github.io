create table PERSONA_DISPONIBLEXEjercicio
(
username		VARCHAR2(10),
es_real		VARCHAR2(1),	
CONSTRAINT fk_perdispxEjercicio_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Ejercicio_id		NUMBER,
CONSTRAINT fk_perdispxEjercicio_Ejercicio FOREIGN KEY (Ejercicio_id) REFERENCES Ejercicio(Ejercicio_id)
);
