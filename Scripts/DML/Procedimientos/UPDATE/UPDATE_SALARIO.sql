create or replace procedure UPDATE_SALARIO(prango IN VARCHAR, pSALARIO_ID IN NUMBER) is
begin
  update SALARIO
    set rango = prango
      where SALARIO_id = pSALARIO_ID;
        end UPDATE_SALARIO;
