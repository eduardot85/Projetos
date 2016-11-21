create database test;

use test;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` decimal(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `pedidos` (
    `id_pedido` INT NOT NULL AUTO_INCREMENT,
    `id_cliente` INT NOT NULL,
    `id_produto` INT NOT NULL,

    PRIMARY KEY(id_pedido),
    INDEX (id_produto),
    INDEX (id_cliente),

    FOREIGN KEY (id_produto)
      REFERENCES produtos(id)
      ON UPDATE CASCADE ON DELETE RESTRICT,

    FOREIGN KEY (id_cliente)
      REFERENCES clientes(id)
)


