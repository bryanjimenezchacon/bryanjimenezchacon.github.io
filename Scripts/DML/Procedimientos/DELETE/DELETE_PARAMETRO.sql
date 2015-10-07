create or replace procedure DELETE_PARAMETRO( pPARAMETRO_ID IN NUMBER) is
begin
  delete from PARAMETRO
      where PARAMETRO_id = pPARAMETRO_ID;
        end DELETE_PARAMETRO;
