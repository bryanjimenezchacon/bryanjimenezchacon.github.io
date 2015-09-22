-- Create table
create table RELIGION
(
  RELIGION_id NUMBER not null,
  nombre        VARCHAR2(20)
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
alter table RELIGION
  add constraint PK_RELIGION primary key (RELIGION_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table RELIGION
  add constraint RELIGION_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
