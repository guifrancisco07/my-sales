USE my_sales;

CREATE TABLE vendas_pacoca(

	/*PRIMARY KEY*/
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
	/* quantidades */
	qtd_pacoca_5 INT NOT NULL,
    qtd_pacoca_1 INT NOT NULL,
    qtd_total_pacoca INT NOT NULL,
    
    /* investimento */
	inv_pacoca DOUBLE NOT NULL,
    
	/* lucro */
	lucro_bruto_pacoca DOUBLE NOT NULL,
    lucro_liq_pacoca DOUBLE NOT NULL,

	/* data */
	DATA date NOT NULL,
	CONSTRAINT uk_data UNIQUE (DATA)

) ENGINE = InnoDB;