/* Create Database and Table */
create database crud_db;

use crud_db;

CREATE TABLE `loja` (
                         `id` int(11) NOT NULL auto_increment,
                         `fabricante` varchar(50),
                         `categoria` varchar(50),
                         `nome_produto` varchar(100),
                         `preco` varchar(25),
                         PRIMARY KEY  (`id`)
);