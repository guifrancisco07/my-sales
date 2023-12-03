USE my_sales;

CREATE TABLE vendas_trento(

	/*PRIMARY KEY*/
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
	/* quantidades */
	qtd_trento_pd INT NOT NULL,
	qtd_trento_sp INT NOT NULL,

	qtd_trento_25 INT NOT NULL,
    qtd_trento_30 INT NOT NULL,
    qtd_trento_35 INT NOT NULL,
    qtd_total_trento INT NOT NULL,
    
    /* investimento */
	inv_trento DOUBLE NOT NULL,
    
	/* lucro */
	lucro_bruto_trento DOUBLE NOT NULL,
    lucro_liq_trento DOUBLE NOT NULL,
	
	/* data */
	DATA date NOT NULL,
	CONSTRAINT uk_data UNIQUE (DATA)

) ENGINE = InnoDB;