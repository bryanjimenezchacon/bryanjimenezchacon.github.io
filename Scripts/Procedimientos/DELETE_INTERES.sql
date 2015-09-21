create or replace procedure DELETE_INTERES( pINTERES_ID IN NUMBER) is
begin
  delete from INTERES
      where INTERES_id = pINTERES_ID;
        end DELETE_INTERES;
