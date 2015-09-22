create or replace procedure DELETE_RELIGION( pRELIGION_ID IN NUMBER) is
begin
  delete from RELIGION
      where RELIGION_id = pRELIGION_ID;
        end DELETE_RELIGION;
