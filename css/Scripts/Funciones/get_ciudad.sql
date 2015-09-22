CREATE OR REPLACE FUNCTION get_ciudad(pCIUDAD number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM CIUDAD
 WHERE CIUDAD = pCIUDAD;
       RETURN (nombre);
       commit;
       END get_ciudad;
