CREATE OR REPLACE FUNCTION get_fumador(pFUMADOR_ID number)
       return VARCHAR2
       as TIPO varchar2(30);
       BEGIN
 SELECT TIPO
 INTO TIPO
 FROM FUMADOR
 WHERE FUMADOR_ID = pFUMADOR_ID;
       RETURN (TIPO);
       commit;
       END get_fumador;
