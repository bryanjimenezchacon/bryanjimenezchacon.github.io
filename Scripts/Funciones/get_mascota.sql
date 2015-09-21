CREATE OR REPLACE FUNCTION get_mascota(pMASCOTA_ID number)
       return VARCHAR2
       as TIPO varchar2(30);
       BEGIN
 SELECT TIPO
 INTO TIPO
 FROM MASCOTA
 WHERE MASCOTA_ID = pMASCOTA_ID;
       RETURN (TIPO);
       commit;
       END get_mascota;
