CREATE OR REPLACE TRIGGER beforeInsert_persona_disp
       BEFORE INSERT
       ON GE.PERSONA_DISPONIBLE FOR EACH ROW
BEGIN
  :NEW.USUARIO_CREACION:= USER;
  :NEW.FEC_CREACION:= SYSDATE;
END;
