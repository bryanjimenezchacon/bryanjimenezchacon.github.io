-- Create table
create table COLOR_PIEL
(
  color_PIEL_id NUMBER not null,
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
alter table COLOR_PIEL
  add constraint PK_COLOR_PIEL primary key (COLOR_PIEL_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;
-- Create/Recreate check constraints 
alter table COLOR_PIEL
  add constraint COLOR_PIEL_NOMBRE_NN
  check ("NOMBRE" IS NOT NULL);
