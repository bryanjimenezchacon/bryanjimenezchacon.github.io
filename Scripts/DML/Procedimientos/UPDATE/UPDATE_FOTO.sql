create or replace procedure UPDATE_FOTO(pNOMBRE IN VARCHAR, pRUTA IN VARCHAR, pFOTO_ID IN NUMBER) is
begin
  update FOTO
    set NOMBRE = pNOMBRE, RUTA = pRUTA
      where FOTO_id = pFOTO_ID;
        end UPDATE_FOTO;
