create or replace procedure DELETE_FOTO( pFOTO_ID IN NUMBER) is
begin
  delete from FOTO
      where FOTO_id = pFOTO_ID;
        end DELETE_FOTO;
