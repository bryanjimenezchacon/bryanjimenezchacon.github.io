CREATE OR REPLACE PROCEDURE imprimir_edades(pEMPLOYEE_ID number) 
       AS 
       edad char(2);
       
              cursor ob_edad is
              SELECT trunc(months_between(to_date(to_char(SYSDATE, 'dd/mm/yyyy'), 'dd/mm/yyyy'), to_date(to_char(NAC_DATE, 'dd/mm/yyyy'), 'dd/mm/yyyy'))/12) anios
              FROM EMPLOYEE        
              WHERE EMPLOYEE_ID = NVL(pEMPLOYEE_ID, EMPLOYEE_ID);
              
       BEGIN
         for i in ob_edad loop
           i.anios;
         END loop;
       END imprimir_edades;
