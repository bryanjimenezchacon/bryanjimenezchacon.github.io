create or replace procedure UPDATE_COLOR_OJOS(pnombre IN VARCHAR, pCOLOR_OJOS_ID IN NUMBER) is
begin
  update COLOR_OJOS
    set nombre = pnombre
      where COLOR_OJOS_id = pCOLOR_OJOS_ID;
        end UPDATE_COLOR_OJOS;
