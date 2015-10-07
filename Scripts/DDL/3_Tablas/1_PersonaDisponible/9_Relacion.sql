create table RELACION
(
  persona1		VARCHAR2(10),
  CONSTRAINT fk_wink_persona_emisor FOREIGN KEY (persona1) REFERENCES PERSONA(username),
  persona2	 	VARCHAR2(10),
  tipo_relacion_id	NUMBER,
  CONSTRAINT fk_wink_persona_receptor FOREIGN KEY (tipo_relacion_id) REFERENCES TIPO_RELACION(tipo_relacion_id),
  CONSTRAINT fk_wink_persona_receptor FOREIGN KEY (persona2) REFERENCES PERSONA(username),
  CONSTRAINT pk_wink PRIMARY KEY (persona1, persona2)
);
