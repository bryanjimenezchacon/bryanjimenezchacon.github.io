-- Create table
create table EDAD
(
  edad_id            NUMBER not null,
  rango              VARCHAR2(20),
  fec_creacion       DATE,
  usuario_creacion   VARCHAR2(20),
  fec_ultima_mod     DATE,
  usuario_ultima_mod VARCHAR2(20)
)
tablespace GE_DATA
  pctfree 10
  initrans 1
  maxtrans 255
  storage
  (
    initial 64K
    next 1M
    minextents 1
    maxextents unlimited
  );
-- Create/Recreate primary, unique and foreign key constraints 
alter table EDAD
  add constraint PK_EDAD primary key (EDAD_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table EDAD
  add constraint EDAD_RANGO_NN
  check ("RANGO"  IS NOT NULL);
