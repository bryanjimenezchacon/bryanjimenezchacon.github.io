-- Create table
create table NIVEL_EDUCACION
(
  NIVEL_EDUCACION_id NUMBER not null,
  GRADO        VARCHAR2(20)
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
alter table NIVEL_EDUCACION
  add constraint PK_NIVEL_EDUCACION primary key (NIVEL_EDUCACION_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table NIVEL_EDUCACION
  add constraint NIVEL_EDUCACION_GRADO_NN
  check ("GRADO" IS NOT NULL);
