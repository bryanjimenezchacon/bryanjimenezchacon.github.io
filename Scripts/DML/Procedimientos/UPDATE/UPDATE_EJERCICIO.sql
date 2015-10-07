create or replace procedure UPDATE_EJERCICIO(pnombre IN VARCHAR, pEJERCICIO_ID IN NUMBER) is
begin
  update EJERCICIO
    set nombre = pnombre
      where EJERCICIO_id = pEJERCICIO_ID;
        end UPDATE_EJERCICIO;
