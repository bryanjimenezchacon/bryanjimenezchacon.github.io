create table PERSONA_DISPONIBLEXColor_Pelo
(
username		VARCHAR2(10),
es_real		VARCHAR2(1),	
CONSTRAINT fk_perdispxColor_Pelo_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Color_Pelo_id		NUMBER,
CONSTRAINT fk_perdispxColor_Pelo_Color_Pelo FOREIGN KEY (Color_Pelo_id) REFERENCES Color_Pelo(Color_Pelo_id)
);
