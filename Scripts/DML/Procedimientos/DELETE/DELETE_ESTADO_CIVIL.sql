create or replace procedure DELETE_ESTADO_CIVIL( pESTADO_CIVIL_ID IN NUMBER) is
begin
  delete from ESTADO_CIVIL
      where ESTADO_CIVIL_id = pESTADO_CIVIL_ID;
        end DELETE_ESTADO_CIVIL;
