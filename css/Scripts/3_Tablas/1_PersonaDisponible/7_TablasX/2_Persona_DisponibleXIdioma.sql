create table PERSONA_DISPONIBLEXIdioma
(
username		VARCHAR2(10),
es_real		VARCHAR2(1),	
CONSTRAINT fk_perdispxIdioma_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Idioma_id		NUMBER,
CONSTRAINT fk_perdispxIdioma_Idioma FOREIGN KEY (Idioma_id) REFERENCES Idioma(Idioma_id)
);
