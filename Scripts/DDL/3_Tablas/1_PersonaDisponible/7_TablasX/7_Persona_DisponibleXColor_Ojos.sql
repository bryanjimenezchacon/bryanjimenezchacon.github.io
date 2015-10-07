create table PERSONA_DISPONIBLEXColor_OJOS
(
username    VARCHAR2(10),
es_real    VARCHAR2(1),  
CONSTRAINT fk_perdispxColor_OJOS_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Color_OJOS_id    NUMBER,
CONSTRAINT fk_perdispxColor_OJOS FOREIGN KEY (Color_OJOS_id) REFERENCES Color_OJOS(Color_OJOS_id)
);
