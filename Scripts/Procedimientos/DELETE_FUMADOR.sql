create or replace procedure DELETE_FUMADOR( pFUMADOR_ID IN NUMBER) is
begin
  delete from FUMADOR
      where FUMADOR_id = pFUMADOR_ID;
        end DELETE_FUMADOR;
