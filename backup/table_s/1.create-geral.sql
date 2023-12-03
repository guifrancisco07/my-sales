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