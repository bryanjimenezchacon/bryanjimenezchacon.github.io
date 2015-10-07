CREATE OR REPLACE FUNCTION get_pais(pPAIS_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM PAIS
 WHERE PAIS_ID = pPAIS_ID;
       RETURN (nombre);
       commit;
       END get_pais;
