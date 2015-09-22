-- Create table
create table SALARIO
(
  SALARIO_id NUMBER not null,
  RANGO        VARCHAR2(20)
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
alter table SALARIO
  add constraint PK_SALARIO primary key (SALARIO_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table SALARIO
  add constraint SALARIO_RANGO_NN
  check ("RANGO" IS NOT NULL);
