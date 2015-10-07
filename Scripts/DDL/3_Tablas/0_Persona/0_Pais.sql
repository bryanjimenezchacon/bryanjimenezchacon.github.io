-- Create table
create table PAIS
(
  pais_id NUMBER not null,
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
alter table PAIS
  add constraint PK_PAIS primary key (PAIS_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table PAIS
  add constraint PAIS_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
