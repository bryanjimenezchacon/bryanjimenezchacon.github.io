CREATE OR REPLACE FUNCTION get_ejercicio(pEJERCICIO_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM EJERCICIO
 WHERE EJERCICIO_ID = pEJERCICIO_ID;
       RETURN (nombre);
       commit;
       END get_ejercicio;
