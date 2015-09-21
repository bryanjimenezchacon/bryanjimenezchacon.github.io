create or replace procedure DELETE_COLOR_OJOS( pCOLOR_OJOS_ID IN NUMBER) is
begin
  delete from COLOR_OJOS
      where COLOR_OJOS_id = pCOLOR_OJOS_ID;
        end DELETE_COLOR_OJOS;
