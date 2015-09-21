CREATE OR REPLACE FUNCTION get_ocupacion(pOCUPACION_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM OCUPACION
 WHERE OCUPACION_ID = pOCUPACION_ID;
       RETURN (nombre);
       commit;
       END get_ocupacion;
