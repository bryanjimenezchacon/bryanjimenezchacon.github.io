-- Create table
create table GENERO
(
  genero_id NUMBER not null,
  nombre    VARCHAR2(30)
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
alter table GENERO
  add constraint PK_GENERO primary key (GENERO_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table GENERO
  add constraint GENERO_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
