-- Create table
create table TIPO_RELACION
(
  TIPO_RELACION_id NUMBER not null,
  nombre  VARCHAR2(30)
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
alter table TIPO_RELACION
  add constraint PK_TIPO_RELACION primary key (TIPO_RELACION_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table TIPO_RELACION
  add constraint TIPO_RELACION_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
