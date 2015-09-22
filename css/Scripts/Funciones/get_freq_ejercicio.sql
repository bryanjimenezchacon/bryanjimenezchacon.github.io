CREATE OR REPLACE FUNCTION get_frecuencia_ejercicio(pfrecuencia_EJERCICIO_ID number)
       return VARCHAR2
       as RANGO varchar2(30);
       BEGIN
 SELECT RANGO
 INTO RANGO
 FROM frecuencia_EJERCICIO
 WHERE frecuencia_EJERCICIO_ID = pfrecuencia_EJERCICIO_ID;
       RETURN (RANGO);
       commit;
       END get_frecuencia_ejercicio;
