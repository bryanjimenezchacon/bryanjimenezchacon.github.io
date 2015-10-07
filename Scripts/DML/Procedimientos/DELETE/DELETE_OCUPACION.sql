create or replace procedure DELETE_OCUPACION( pOCUPACION_ID IN NUMBER) is
begin
  delete from OCUPACION
      where OCUPACION_id = pOCUPACION_ID;
        end DELETE_OCUPACION;
