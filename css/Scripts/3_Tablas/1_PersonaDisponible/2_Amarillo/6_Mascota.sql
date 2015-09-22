-- Create table
create table MASCOTA
(
  MASCOTA_id NUMBER not null,
  TIPO        VARCHAR2(20)
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
alter table MASCOTA
  add constraint PK_MASCOTA primary key (MASCOTA_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table MASCOTA
  add constraint MASCOTA_TIPO_NN
  check ("TIPO" IS NOT NULL);
