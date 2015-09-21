create or replace procedure DELETE_CIUDAD( pCIUDAD_ID IN NUMBER) is
begin
  delete from CIUDAD
      where CIUDAD_id = pCIUDAD_ID;
        end DELETE_CIUDAD;
