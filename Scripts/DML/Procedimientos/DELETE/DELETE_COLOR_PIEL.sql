create or replace procedure DELETE_COLOR_PIEL( pCOLOR_PIEL_ID IN NUMBER) is
begin
  delete from COLOR_PIEL
      where COLOR_PIEL_id = pCOLOR_PIEL_ID;
        end DELETE_COLOR_PIEL;
