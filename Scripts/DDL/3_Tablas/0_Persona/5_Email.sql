-- Create table
create table Email
(
  email varchar2(80) not null,
  username varchar2(10)
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
alter table Email
  add CONSTRAINT pk_email PRIMARY KEY (email);
alter table Email
  add CONSTRAINT fk_email_persona FOREIGN KEY (username) REFERENCES PERSONA(username);
