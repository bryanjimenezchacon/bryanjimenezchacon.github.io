CREATE OR REPLACE TRIGGER beforeUpdate_persona
       BEFORE UPDATE
       ON GE.PERSONA FOR EACH ROW
BEGIN
  :NEW.USUARIO_ULTIMA_MOD:= USER;
  :NEW.FEC_ULTIMA_MOD:= SYSDATE;
END;