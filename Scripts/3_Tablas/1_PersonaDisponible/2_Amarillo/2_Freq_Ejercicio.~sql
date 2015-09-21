-- Create table
create table FRECUENCIA_EJERCICIO
(
  FRECUENCIA_EJERCICIO_id NUMBER not null,
  RANGO          NUMBER(3)
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
-- Create/Recreate check constraints 
alter table FRECUENCIA_EJERCICIO
  add constraint FRECUENCIA_EJERCICIO_RANGO_NN
  check ("RANGO" IS NOT NULL);
