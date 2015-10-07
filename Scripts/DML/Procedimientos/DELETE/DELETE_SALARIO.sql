create or replace procedure DELETE_SALARIO( pSALARIO_ID IN NUMBER) is
begin
  delete from SALARIO
      where SALARIO_id = pSALARIO_ID;
        end DELETE_SALARIO;
