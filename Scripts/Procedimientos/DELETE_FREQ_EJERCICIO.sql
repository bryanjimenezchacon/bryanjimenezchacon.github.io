create or replace procedure DELETE_FREQ_EJERCICIO( pFREQ_EJERCICIO_ID IN NUMBER) is
begin
  delete from FREQ_EJERCICIO
      where FREQ_EJERCICIO_id = pFREQ_EJERCICIO_ID;
        end DELETE_FREQ_EJERCICIO;
