CREATE TABLE IF NOT EXISTS produtos(
	idProd INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
	cor VARCHAR(20) NOT NULL,
    
	PRIMARY KEY(idProd)
    );
    
CREATE TABLE IF NOT EXISTS preco(
	idPreco INT NOT NULL AUTO_INCREMENT,
    preco DECIMAL(4,2),
    produtos_idProd INT NOT NULL,
    
    PRIMARY KEY(idPreco),
    
    CONSTRAINT produtos_id_preco
		FOREIGN KEY(produtos_idProd)
        REFERENCES produtos(idProd)
    );
    
    
    INSERT INTO produtos (nome, cor) VALUES(
		"caneta",
        "preto"
        );
        
         INSERT INTO produtos (nome, cor) VALUES(
		"caneta",
        "azul"
        );
        
	INSERT INTO  preco (preco, produtos_idProd ) VALUES(
		15,
        1
    );	
    
    INSERT INTO  preco (preco, produtos_idProd ) VALUES(
		12,
        2
    );
		