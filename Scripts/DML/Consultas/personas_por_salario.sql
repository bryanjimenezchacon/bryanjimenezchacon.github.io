CREATE OR REPLACE PROCEDURE PERSONAS_POR_SALARIO
(
  pSALARIO_ID IN PERSONA_DISPONIBLE.SALARIO_ID%TYPE,
  p_recordset OUT SYS_REFCURSOR
) AS
BEGIN
  OPEN p_recordset FOR

SELECT SALARIO.RANGO                 AS "Rango",
  COUNT(PERSONA_DISPONIBLE.USERNAME) AS "Personas seg�n salario"
FROM PERSONA_DISPONIBLE
INNER JOIN SALARIO
ON SALARIO.SALARIO_ID = PERSONA_DISPONIBLE.SALARIO_ID

WHERE SALARIO.SALARIO_ID = pSALARIO_ID
GROUP BY SALARIO.RANGO;

END PERSONAS_POR_SALARIO;
