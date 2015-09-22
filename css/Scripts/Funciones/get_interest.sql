CREATE OR REPLACE FUNCTION get_interes(pINTERES_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM INTERES
 WHERE INTERES_ID = pINTERES_ID;
       RETURN (nombre);
       commit;
       END get_interes;
