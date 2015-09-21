CREATE OR REPLACE FUNCTION get_salario(pSALARIO_ID number)
       return VARCHAR2
       as rango varchar2(30);
       BEGIN
 SELECT rango
 INTO rango
 FROM SALARIO
 WHERE SALARIO_ID = pSALARIO_ID;
       RETURN (rango);
       commit;
       END get_salario;
