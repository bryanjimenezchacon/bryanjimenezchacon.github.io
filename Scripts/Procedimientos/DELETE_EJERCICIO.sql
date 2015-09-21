create or replace procedure DELETE_EJERCICIO( pEJERCICIO_ID IN NUMBER) is
begin
  delete from EJERCICIO
      where EJERCICIO_id = pEJERCICIO_ID;
        end DELETE_EJERCICIO;
