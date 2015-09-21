create table WINK
(
  fec_WINK			DATE,
--  fec_creacion			DATE,
--  fec_ultima_modificacion	DATE,
  username_emisor		VARCHAR2(10),
  CONSTRAINT fk_wink_persona_emisor FOREIGN KEY (username_emisor) REFERENCES PERSONA(username),
  username_receptor	 	VARCHAR2(10),
  CONSTRAINT fk_wink_persona_receptor FOREIGN KEY (username_receptor) REFERENCES PERSONA(username),
  CONSTRAINT pk_wink PRIMARY KEY (fec_WINK, username_emisor, username_receptor)
);
