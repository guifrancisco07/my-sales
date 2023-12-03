USE my_sales;

CREATE TABLE vendas_total(

	/*PRIMARY KEY*/
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
	/* quantidades */
	qtd_total_trento INT NOT NULL,
    qtd_total_chips INT NOT NULL,
	qtd_total_pacoca INT NOT NULL,
	qtd_total_fini INT NOT NULL,
    
    /* investimento */
	inv_total DOUBLE NOT NULL,
    
	/* lucro */
	lucro_total DOUBLE NOT NULL,
    liq_total DOUBLE NOT NULL,

	/* data */
	DATA date NOT NULL,
	CONSTRAINT uk_data UNIQUE (DATA)

) ENGINE = InnoDB;