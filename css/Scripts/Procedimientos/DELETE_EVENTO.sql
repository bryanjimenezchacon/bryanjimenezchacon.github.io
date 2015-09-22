create or replace procedure DELETE_EVENTO( pEVENTO_ID IN NUMBER) is
begin
  delete from EVENTO
      where EVENTO_id = pEVENTO_ID;
        end DELETE_EVENTO;
