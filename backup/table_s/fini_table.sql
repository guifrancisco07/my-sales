USE my_sales;

CREATE TABLE vendas_fini(

	/*PRIMARY KEY*/
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
	/* quantidades */
	qtd_fini INT NOT NULL,
    
    /* investimento */
	inv_fini DOUBLE NOT NULL,
    
	/* lucro */
	lucro_bruto_fini DOUBLE NOT NULL,
    lucro_liq_fini DOUBLE NOT NULL,

	/* data */
	DATA date NOT NULL,
	CONSTRAINT uk_data UNIQUE (DATA)

) ENGINE = InnoDB;