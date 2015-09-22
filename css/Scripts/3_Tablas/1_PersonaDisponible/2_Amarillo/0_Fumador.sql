-- Create table
create table FUMADOR
(
  FUMADOR_id NUMBER not null,
  tipo          VARCHAR2(30)
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
alter table FUMADOR
  add constraint PK_FUMADOR primary key (FUMADOR_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table FUMADOR
  add constraint FUMADOR_TIPO_NN
  check ("TIPO" IS NOT NULL);
