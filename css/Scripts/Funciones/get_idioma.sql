CREATE OR REPLACE FUNCTION get_idioma(pIDIOMA_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM IDIOMA
 WHERE IDIOMA_ID = pIDIOMA_ID;
       RETURN (nombre);
       commit;
       END get_idioma;
