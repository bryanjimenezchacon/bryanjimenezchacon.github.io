alter table PERSONA_DISPONIBLEXINTERES
add (
  fec_creacion		DATE,
  usuario_creacion	VARCHAR2(10),
  fec_ultima_mod	DATE,
  usuario_ultima_mod	VARCHAR2(10)
);
