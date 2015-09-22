-- Create table
create table INTERES
(
  INTERES_id NUMBER not null,
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
alter table INTERES
  add constraint PK_INTERES primary key (INTERES_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table INTERES
  add constraint INTERES_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
