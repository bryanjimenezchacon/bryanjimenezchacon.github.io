-- Create table
create table EVENTO
(
  evento_id   NUMBER not null,
  nombre      VARCHAR2(30) not null,
  fecha       DATE not null,
  lugar       VARCHAR2(30) not null,
  descripcion VARCHAR2(300) not null
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
alter table EVENTO
  add constraint PK_EVENTO primary key (EVENTO_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table EVENTO
  add constraint EVENTO_DESCRIPCION_NN
  check ("DESCRIPCION" IS NOT NULL);
alter table EVENTO
  add constraint EVENTO_FECHA_NN
  check ("FECHA" IS NOT NULL);
alter table EVENTO
  add constraint EVENTO_LUGAR_NN
  check ("LUGAR" IS NOT NULL);
alter table EVENTO
  add constraint EVENTO_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
