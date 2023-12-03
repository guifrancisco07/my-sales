USE my_sales;

CREATE TABLE valores_produtos(

    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	valor_TP2 DOUBLE NOT NULL,
    valor_TB2 DOUBLE NOT NULL,
    valor_TAP DOUBLE NOT NULL,
    valor_TAB DOUBLE NOT NULL,
    valor_TSP DOUBLE NOT NULL,
    valor_TSB DOUBLE NOT NULL,
    valor_chips DOUBLE NOT NULL,
    valor_pacoca DOUBLE NOT NULL,
    valor_fini DOUBLE NOT NULL,

	/* data */
	DATA date NOT NULL,
	CONSTRAINT uk_data UNIQUE (DATA)

) ENGINE = InnoDB;