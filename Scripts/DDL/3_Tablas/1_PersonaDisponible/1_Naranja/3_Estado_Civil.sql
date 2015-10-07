-- Create table
create table ESTADO_CIVIL
(
  ESTADO_CIVIL_id NUMBER not null,
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
alter table ESTADO_CIVIL
  add constraint PK_ESTADO_CIVIL primary key (ESTADO_CIVIL_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table ESTADO_CIVIL
  add constraint ESTADO_CIVIL_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
