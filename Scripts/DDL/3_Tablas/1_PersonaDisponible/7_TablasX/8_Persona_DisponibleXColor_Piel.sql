create table PERSONA_DISPONIBLEXColor_PIEL
(
username    VARCHAR2(10),
es_real    VARCHAR2(1),  
CONSTRAINT fk_perdispxColor_PIEL_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Color_PIEL_id    NUMBER,
CONSTRAINT fk_perdispxColor_PIEL FOREIGN KEY (Color_PIEL_id) REFERENCES Color_PIEL(Color_PIEL_id)
);
