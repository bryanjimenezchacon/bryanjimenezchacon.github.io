CREATE OR REPLACE FUNCTION get_color_pelo(pCOLOR_PELO_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM COLOR_PELO
 WHERE COLOR_PELO_ID = pCOLOR_PELO_ID;
       RETURN (nombre);
       commit;
       END get_color_pelo;
