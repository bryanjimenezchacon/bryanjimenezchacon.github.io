create table PERSONA_DISPONIBLEXOcupacion
(
username		VARCHAR2(10),
es_real		VARCHAR2(1),	
CONSTRAINT fk_perdispxOcupacion_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Ocupacion_id		NUMBER,
CONSTRAINT fk_perdispxOcupacion_Ocupacion FOREIGN KEY (Ocupacion_id) REFERENCES Ocupacion(Ocupacion_id)
);
