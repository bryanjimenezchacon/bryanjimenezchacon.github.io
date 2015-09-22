create table OCUPACIONXCATEGORIA_OCUPACION
(
  ocupacion_id NUMBER,
  categoria_ocupacion_id NUMBER,
  CONSTRAINT pk_ocuxcat PRIMARY KEY (ocupacion_id, categoria_ocupacion_id),
  CONSTRAINT fk_ocuxcat_ocupacion FOREIGN KEY (ocupacion_id) REFERENCES OCUPACION(ocupacion_id),
  CONSTRAINT fk_ocuxcat_categoria_ocupacion FOREIGN KEY (categoria_ocupacion_id) REFERENCES CATEGORIA_OCUPACION(categoria_ocupacion_id)
);
