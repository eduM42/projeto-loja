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
ALTER TABLE `tab_carrinho` ADD CONSTRAINT `fk_prod_id` FOREIGN KEY (`prod_id`) REFERENCES `tab_produtos`(`prod_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO tab_clientes ()
VALUES ();