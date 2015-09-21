-- Create table
create table CIUDAD
(
  ciudad_id NUMBER not null,
  nombre    VARCHAR2(30),
  pais_id NUMBER
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
alter table CIUDAD
  add constraint PK_CIUDAD primary key (CIUDAD_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
alter table CIUDAD
  add CONSTRAINT fk_ciudad_pais FOREIGN KEY (pais_id) REFERENCES PAIS(pais_id);
-- Create/Recreate check constraints 
alter table CIUDAD
  add constraint CIUDAD_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
