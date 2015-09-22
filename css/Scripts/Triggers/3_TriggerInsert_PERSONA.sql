CREATE OR REPLACE TRIGGER beforeInsert_persona
       BEFORE INSERT
       ON GE.PERSONA FOR EACH ROW
BEGIN
  :NEW.USUARIO_CREACION:= USER;
  :NEW.FEC_CREACION:= SYSDATE;
END;
