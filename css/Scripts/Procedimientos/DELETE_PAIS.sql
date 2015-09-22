create or replace procedure DELETE_PAIS( pPAIS_ID IN NUMBER) is
begin
  delete from PAIS
      where PAIS_id = pPAIS_ID;
        end DELETE_PAIS;
