-- Create table
create table FRECUENCIA_EJERCICIO
(
  frecuencia_ejercicio_id NUMBER not null,
  rango                   VARCHAR2(20) not null,
  fec_creacion            DATE,
  usuario_creacion        VARCHAR2(10),
  fec_ultima_mod          DATE,
  usuario_ultima_mod      VARCHAR2(10)
)
tablespace GE_DATA
  pctfree 10
  initrans 1
  maxtrans 255
  storage
  (
    initial 64K
    minextents 1
    maxextents unlimited
  );
-- Create/Recreate primary, unique and foreign key constraints 
alter table FRECUENCIA_EJERCICIO
  add constraint PK_FRECUENCIA_EJERCICIO primary key (FRECUENCIA_EJERCICIO_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
