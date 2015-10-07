-- Create table
create table CONTEXTURA
(
  contextura_id NUMBER not null,
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
alter table CONTEXTURA
  add constraint PK_CONTEXTURA primary key (CONTEXTURA_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table CONTEXTURA
  add constraint CONTEXTURA_TIPO_NN
  check ("TIPO" IS NOT NULL);
