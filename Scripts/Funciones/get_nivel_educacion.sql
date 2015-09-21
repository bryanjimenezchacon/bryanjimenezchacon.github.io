CREATE OR REPLACE FUNCTION get_nivel_educacion(pNIVEL_EDUCACION_ID number)
       return VARCHAR2
       as GRADO varchar2(30);
       BEGIN
 SELECT GRADO
 INTO GRADO
 FROM NIVEL_EDUCACION
 WHERE NIVEL_EDUCACION_ID = pNIVEL_EDUCACION_ID;
       RETURN (GRADO);
       commit;
       END get_nivel_educacion;
