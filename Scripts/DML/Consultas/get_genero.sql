CREATE OR REPLACE FUNCTION get_genero(pGENERO_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM GENERO
 WHERE GENERO_ID = pGENERO_ID;
       RETURN (nombre);
       commit;
       END get_genero;
