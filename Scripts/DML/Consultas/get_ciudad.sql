CREATE OR REPLACE FUNCTION get_ciudad(pCIUDAD number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT ciudad.NOMBRE
 INTO nombre
 FROM CIUDAD
 WHERE CIUDAD_id = pCIUDAD;
       RETURN (nombre);
       commit;
       END get_ciudad;
