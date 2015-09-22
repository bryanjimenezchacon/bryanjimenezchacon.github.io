CREATE OR REPLACE FUNCTION get_color_ojos(pCOLOR_OJOS_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM COLOR_OJOS
 WHERE COLOR_OJOS_ID = pCOLOR_OJOS_ID;
       RETURN (nombre);
       commit;
       END get_color_ojos;
