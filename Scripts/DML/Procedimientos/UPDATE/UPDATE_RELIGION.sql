create or replace procedure UPDATE_RELIGION(pNOMBRE IN VARCHAR, pRELIGION_ID IN NUMBER) is
begin
  update RELIGION
    set NOMBRE = pNOMBRE
      where RELIGION_id = pRELIGION_ID;
        end UPDATE_RELIGION;
