create table PERSONA
(
  username		VARCHAR2(10),
  CONSTRAINT pk_username PRIMARY KEY (username),
  es_admin		VARCHAR2(1),
  CONSTRAINT bool_es_admin CHECK(es_admin in (0,1)),
  nacimiento		DATE,
--identidad_id	 	NUMBER not null,
  primer_apellido 	VARCHAR2(30),
  segundo_apellido 	VARCHAR2(30),
  nombre		VARCHAR2(40),
  genero_id		NUMBER,
  CONSTRAINT fk_persona_genero FOREIGN KEY (genero_id) REFERENCES GENERO(genero_id),
  ciudad_id		NUMBER,
  CONSTRAINT fk_persona_ciudad FOREIGN KEY (ciudad_id) REFERENCES CIUDAD(ciudad_id)
);

alter table PERSONA
  add slogan		VARCHAR2(140);

alter table PERSONA
  modify slogan		VARCHAR2(500);
alter table PERSONA
  modify segundo_apellido VARCHAR2(50);
