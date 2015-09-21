CREATE OR REPLACE FUNCTION get_estado_civil(pESTADO_CIVIL_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM ESTADO_CIVIL
 WHERE ESTADO_CIVIL_ID = pESTADO_CIVIL_ID;
       RETURN (nombre);
       commit;
       END get_estado_civil;
