create table PERSONA_DISPONIBLEXMascota
(
username		VARCHAR2(10),
es_real		VARCHAR2(1),	
CONSTRAINT fk_perdispxMascota_perdisp FOREIGN KEY (username,es_real) REFERENCES persona_disponible(username,es_real),
Mascota_id		NUMBER,
CONSTRAINT fk_perdispxMascota_Mascota FOREIGN KEY (Mascota_id) REFERENCES Mascota(Mascota_id)
);
alter table PERSONA_DISPONIBLEXMascota
  add CANTIDAD NUMBER NOT NULL;
