create table INTERESXCATEGORIA_INTERES
(
  interes_id NUMBER,
  categoria_interes_id NUMBER,
  CONSTRAINT pk_interxcat PRIMARY KEY (interes_id, categoria_interes_id),
  CONSTRAINT fk_interxcat_interes FOREIGN KEY (interes_id) REFERENCES INTERES(interes_id),
  CONSTRAINT fk_interxcat_categoria_interes FOREIGN KEY (categoria_interes_id) REFERENCES CATEGORIA_INTERES(categoria_interes_id)
);
