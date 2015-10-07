create or replace procedure UPDATE_CIUDAD(pnombre IN VARCHAR, pCIUDAD_ID IN NUMBER) is
begin
  update CIUDAD
    set nombre = pnombre
      where CIUDAD_id = pCIUDAD_ID;
        end UPDATE_CIUDAD;
