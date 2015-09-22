-- Create table
create table CATEGORIA_OCUPACION
(
  CATEGORIA_OCUPACION_id NUMBER not null,
  nombre        VARCHAR2(20)
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
alter table CATEGORIA_OCUPACION
  add constraint PK_CATEGORIA_OCUPACION primary key (CATEGORIA_OCUPACION_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table CATEGORIA_OCUPACION
  add constraint CATEGORIA_OCUPACION_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
