CREATE OR REPLACE FUNCTION get_bebedor(pBEBEDOR_ID number)
       return VARCHAR2
       as TIPO varchar2(30);
       BEGIN
 SELECT TIPO
 INTO TIPO
 FROM BEBEDOR
 WHERE BEBEDOR_ID = pBEBEDOR_ID;
       RETURN (TIPO);
       commit;
       END get_bebedor;
