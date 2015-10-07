create or replace procedure UPDATE_INTERES(pNOMBRE IN VARCHAR, pINTERES_ID IN NUMBER) is
begin
  update INTERES
    set NOMBRE = pNOMBRE
      where INTERES_id = pINTERES_ID;
        end UPDATE_INTERES;
