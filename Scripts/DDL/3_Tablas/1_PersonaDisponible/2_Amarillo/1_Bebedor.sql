-- Create table
create table BEBEDOR
(
  BEBEDOR_id NUMBER not null,
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
alter table BEBEDOR
  add constraint PK_BEBEDOR primary key (BEBEDOR_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table BEBEDOR
  add constraint BEBEDOR_TIPO_NN
  check ("TIPO" IS NOT NULL);
