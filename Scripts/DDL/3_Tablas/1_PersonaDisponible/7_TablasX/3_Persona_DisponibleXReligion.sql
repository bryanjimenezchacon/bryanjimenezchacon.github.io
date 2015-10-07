create table PERSONA_DISPONIBLEXReligion
(
username		VARCHAR2(10),
es_real		VARCHAR2(1),	
CONSTRAINT fk_perdispxReligion_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Religion_id		NUMBER,
CONSTRAINT fk_perdispxReligion_Religion FOREIGN KEY (Religion_id) REFERENCES Religion(Religion_id)
);
