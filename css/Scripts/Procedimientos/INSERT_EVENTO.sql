create or replace procedure INSERT_EVENTO(pEVENTO_ID IN NUMBER, pNOMBRE IN VARCHAR2,pFECHA IN DATE,pLUGAR IN VARCHAR2, pDESCRIPCION IN VARCHAR2, FEC_CREACION IN DATE, USUARIO_CREACION IN VARCHAR, FEC_ULTIMA_MOD IN DATE, USUARIO_ULTIMA_MOD IN VARCHAR2  ) is
begin
  INSERT INTO EVENTO
  VALUES (pEVENTO_ID,pNOMBRE,pFECHA, pLUGAR, pDESCRIPCION, FEC_CREACION , USUARIO_CREACION , FEC_ULTIMA_MOD, USUARIO_ULTIMA_MOD );
  
end INSERT_EVENTO;