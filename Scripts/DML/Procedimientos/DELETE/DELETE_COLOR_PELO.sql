create or replace procedure DELETE_COLOR_PELO( pCOLOR_PELO_ID IN NUMBER) is
begin
  delete from COLOR_PELO
      where COLOR_PELO_id = pCOLOR_PELO_ID;
        end DELETE_COLOR_PELO;
