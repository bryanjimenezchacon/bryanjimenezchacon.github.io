CREATE OR REPLACE FUNCTION get_religion(pRELIGION_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM RELIGION
 WHERE RELIGION_ID = pRELIGION_ID;
       RETURN (nombre);
       commit;
       END get_religion;
