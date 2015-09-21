create or replace procedure DELETE_BEBEDOR( pBEBEDOR_ID IN NUMBER) is
begin
  delete from BEBEDOR
      where BEBEDOR_id = pBEBEDOR_ID;
        end DELETE_BEBEDOR;
