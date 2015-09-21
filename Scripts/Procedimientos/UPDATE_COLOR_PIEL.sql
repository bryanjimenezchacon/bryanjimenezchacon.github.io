create or replace procedure UPDATE_COLOR_PIEL(pnombre IN VARCHAR, pCOLOR_PIEL_ID IN NUMBER) is
begin
  update COLOR_PIEL
    set nombre = pnombre
      where COLOR_PIEL_id = pCOLOR_PIEL_ID;
        end UPDATE_COLOR_PIEL;
