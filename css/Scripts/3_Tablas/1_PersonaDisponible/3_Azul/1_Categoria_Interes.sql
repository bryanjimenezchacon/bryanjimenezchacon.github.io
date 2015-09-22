-- Create table
create table CATEGORIA_INTERES
(
  CATEGORIA_INTERES_id NUMBER not null,
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
alter table CATEGORIA_INTERES
  add constraint PK_CATEGORIA_INTERES primary key (CATEGORIA_INTERES_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table CATEGORIA_INTERES
  add constraint CATEGORIA_INTERES_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
