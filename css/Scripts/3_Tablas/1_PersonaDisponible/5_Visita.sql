create table Visita
(
  fec_visita			DATE,
--  fec_creacion			DATE,
--  fec_ultima_modificacion	DATE,
  username_visitante		VARCHAR2(10),
  CONSTRAINT fk_visita_persona_visitante FOREIGN KEY (username_visitante) REFERENCES PERSONA(username),
  username_visitada	 	VARCHAR2(10),
  CONSTRAINT fk_visita_persona_visitada FOREIGN KEY (username_visitada) REFERENCES PERSONA(username),
  CONSTRAINT pk_visita PRIMARY KEY (fec_visita, username_visitante, username_visitada)
);
