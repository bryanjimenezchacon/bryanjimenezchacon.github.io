create or replace procedure UPDATE_PAIS(pnombre IN VARCHAR, pPAIS_ID IN NUMBER) is
begin
  update PAIS
    set nombre = pnombre
      where PAIS_id = pPAIS_ID;
        end UPDATE_PAIS;
