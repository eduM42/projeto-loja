CREATE TABLE tab_clientes(
    cli_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cli_email varchar(40),
    cli_senha varchar(32),
    cli_nome varchar(20) NOT NULL,
    cli_sobrenome varchar(30) NOT NULL,
    cli_cpf int NOT NULL,
    cli_fone varchar(15) NULL,
    cli_end varchar(80),
    cli_data_nasc date,
    cli_permissao int
);

CREATE TABLE tab_carrinho(
    cart_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cli_id int,
    prod_id int,
    cart_qnt int,

);

CREATE TABLE tab_produtos(
    prod_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    prod_nome varchar(50),
    prod_desc varchar(180),
    prod_valor float NOT NULL,
    prod_img int NOT NULL
);

ALTER TABLE `tab_carrinho` ADD CONSTRAINT `fk_cli_id` FOREIGN KEY (`cli_id`) REFERENCES `tab_clientes`(`cli_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `tab_carrinho` ADD CONSTRAINT `fk_prod_id` FOREIGN KEY (`prod_id`) REFERENCES `tab_produtos`(`prod_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO tab_carrinho (cli_id, prod_id, cart_qnt)
VALUES (1, 1, 1);

INSERT INTO tab_clientes (cli_email, cli_senha, cli_nome, cli_sobrenome, cli_cpf, cli_fone, cli_end, cli_data_nasc, cli_permissao)
VALUES ('edu.mira42@gmail.com', '123', 'Eduardo', 'Mira Ozorio', 38547358803, 11954457050, 'Rua Santo Antônio, 1000', '2004/01/30', 1);

INSERT INTO tab_clientes (cli_email, cli_senha, cli_nome, cli_sobrenome, cli_cpf, cli_fone, cli_end, cli_data_nasc, cli_permissao)
VALUES ('luca@gmail.com', '123', 'Luca', 'de Andrade e Olivera', 12312323123, 12341242412, 'Santo andre', '2004/01/30', 0);

INSERT INTO tab_produtos (prod_nome, prod_desc, prod_valor, prod_img)
VALUES ('Notebook Lenovo IdeadPad Gaming 3i', 'Notebook Lenovo de alto desempenho e com uma excelente construção, tela, processador e placa de vídeo', 4759.99, 'notebook.png');

INSERT INTO tab_produtos (prod_nome, prod_desc, prod_valor, prod_img)
VALUES ('Teclado e Mouse Logitech MK235', 'Tecnologia sem fio em um pacote completo de teclado e mouse, nunca mais sinta-se preso ao seu dispositivo ou sofra com qualquer desconforto!', 169.90, 'teclado.png');

INSERT INTO tab_produtos (prod_nome, prod_desc, prod_valor, prod_img)
VALUES ('Samsung Galaxy Buds 2 Pro', 'Qualidade de som impecável e conforto inimaginável, atrelados a uma bateria de longa duração. Nunca fique sem suas músicas!', 1499.99, 'fone.png');

INSERT INTO tab_produtos (prod_nome, prod_desc, prod_valor, prod_img)
VALUES ('Monitor Samsung Odyssey 49"', 'O melhor display do mundo, sem comparações. Para a melhor qualidade de imagem, melhor fluidez, uso mais fácil, não há outra alternativa.', 11399.99, 'monitor.png');

SELECT cli_nome FROM `exemplo_db`.`tab_clientes` WHERE `cli_id` = 1;