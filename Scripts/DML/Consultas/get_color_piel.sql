CREATE OR REPLACE FUNCTION get_color_piel(pCOLOR_PIEL_ID number)
       return VARCHAR2
       as nombre varchar2(30);
       BEGIN
 SELECT NOMBRE
 INTO nombre
 FROM COLOR_PIEL
 WHERE COLOR_PIEL_ID = pCOLOR_PIEL_ID;
       RETURN (nombre);
       commit;
       END get_color_piel;
