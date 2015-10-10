CREATE OR REPLACE TRIGGER beforeInsert_color_ojos
       BEFORE INSERT
       ON GE.COLOR_OJOS FOR EACH ROW
BEGIN
  :NEW.USUARIO_CREACION:= USER;
  :NEW.FEC_CREACION:= SYSDATE;
END;