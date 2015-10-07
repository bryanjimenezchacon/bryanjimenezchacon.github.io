CREATE OR REPLACE FUNCTION fecha_to_edad(fecha DATE)
	RETURN NUMBER
	AS edad NUMBER;
BEGIN
	return trunc(months_between(sysdate,fecha)/12);
END fecha_to_edad;
/
