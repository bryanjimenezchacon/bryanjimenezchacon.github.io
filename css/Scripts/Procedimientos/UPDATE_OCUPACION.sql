create or replace procedure UPDATE_OCUPACION(pNOMBRE IN VARCHAR, pOCUPACION_ID IN NUMBER) is
begin
  update OCUPACION
    set NOMBRE = pNOMBRE
      where OCUPACION_id = pOCUPACION_ID;
        end UPDATE_OCUPACION;
