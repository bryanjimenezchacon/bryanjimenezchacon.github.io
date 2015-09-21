CREATE OR REPLACE FUNCTION get_contextura(pCONTEXTURA_ID number)
       return VARCHAR2
       as TIPO varchar2(30);
       BEGIN
 SELECT TIPO
 INTO TIPO
 FROM CONTEXTURA
 WHERE CONTEXTURA_ID = pCONTEXTURA_ID;
       RETURN (TIPO);
       commit;
       END get_contextura;
