USE my_sales;

CREATE TABLE vendas_chips(

	/*PRIMARY KEY*/
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
	/* quantidades */
	qtd_chips_25 INT NOT NULL,
    qtd_chips_30 INT NOT NULL,
	qtd_total_chips INT NOT NULL,
    
    /* investimento */
	inv_chips DOUBLE NOT NULL,
    
	/* lucro */
	lucro_bruto_chips DOUBLE NOT NULL,
    lucro_liq_chips DOUBLE NOT NULL,

	/* data */
	DATA date NOT NULL,
	CONSTRAINT uk_data UNIQUE (DATA)

) ENGINE = InnoDB;