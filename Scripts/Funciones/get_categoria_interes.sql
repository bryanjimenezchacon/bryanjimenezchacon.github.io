CREATE OR REPLACE FUNCTION get_categoria_interes(pCATEGORIA_INTERES_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM CATEGORIA_INTERES
 WHERE CATEGORIA_INTERES_ID = pCATEGORIA_INTERES_ID;
       RETURN (nombre);
       commit;
       END get_categoria_interes;
