create table FOTO(
  foto_id NUMBER not null,
  ruta    BLOB,
  username varchar2(10),
  nombre    VARCHAR2(40)
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

alter table FOTO
  add constraint PK_FOTO primary key (FOTO_ID)
  using index 
  tablespace GE_DATA
  pctfree 10
  initrans 2
  maxtrans 255;

alter table FOTO
  add CONSTRAINT fk_foto_persona FOREIGN KEY (username) REFERENCES PERSONA(username);
