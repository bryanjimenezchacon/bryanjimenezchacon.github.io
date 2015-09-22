-- Create table
create table EJERCICIO
(
  EJERCICIO_id NUMBER not null,
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
alter table EJERCICIO
  add constraint PK_EJERCICIO primary key (EJERCICIO_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table EJERCICIO
  add constraint EJERCICIO_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
