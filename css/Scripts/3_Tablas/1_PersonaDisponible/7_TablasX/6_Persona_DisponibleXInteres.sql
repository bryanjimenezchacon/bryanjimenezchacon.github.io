create table PERSONA_DISPONIBLEXInteres
(
username		VARCHAR2(10),
es_real		VARCHAR2(1),	
CONSTRAINT fk_perdispxInteres_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Interes_id		NUMBER,
CONSTRAINT fk_perdispxInteres_Interes FOREIGN KEY (Interes_id) REFERENCES Interes(Interes_id)
);
