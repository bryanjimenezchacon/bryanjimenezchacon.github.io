create or replace procedure UPDATE_FREQ_EJERCICIO(prango IN VARCHAR, pFREQ_EJERCICIO_ID IN NUMBER) is
begin
  update FREQ_EJERCICIO
    set rango = prango
      where FREQ_EJERCICIO_id = pFREQ_EJERCICIO_ID;
        end UPDATE_FREQ_EJERCICIO;
