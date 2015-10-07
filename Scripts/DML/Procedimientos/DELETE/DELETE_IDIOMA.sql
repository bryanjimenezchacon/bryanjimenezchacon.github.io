create or replace procedure DELETE_IDIOMA( pIDIOMA_ID IN NUMBER) is
begin
  delete from IDIOMA
      where IDIOMA_id = pIDIOMA_ID;
        end DELETE_IDIOMA;
