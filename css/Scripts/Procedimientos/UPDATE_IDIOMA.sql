create or replace procedure UPDATE_IDIOMA(pnombre IN VARCHAR, pIDIOMA_ID IN NUMBER) is
begin
  update IDIOMA
    set nombre = pnombre
      where IDIOMA_id = pIDIOMA_ID;
        end UPDATE_IDIOMA;
