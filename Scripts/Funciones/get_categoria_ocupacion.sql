CREATE OR REPLACE FUNCTION get_categoria_ocupacion(pCATEGORIA_OCUPACION_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM CATEGORIA_OCUPACION
 WHERE CATEGORIA_OCUPACION_ID = pCATEGORIA_OCUPACION_ID;
       RETURN (nombre);
       commit;
       END get_categoria_ocupacion;
