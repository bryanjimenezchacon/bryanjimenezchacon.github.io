create or replace procedure UPDATE_COLOR_PELO(pnombre IN VARCHAR, pCOLOR_PELO_ID IN NUMBER) is
begin
  update COLOR_PELO
    set nombre = pnombre
      where COLOR_PELO_id = pCOLOR_PELO_ID;
        end UPDATE_COLOR_PELO;
