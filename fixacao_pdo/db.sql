USE loja ;

CREATE TABLE fornecedor
(
  id       INT         NOT NULL AUTO_INCREMENT,
  nome     VARCHAR(20) NULL    ,
  email    VARCHAR(20) NULL    ,
  telefone CHAR(11)    NULL    ,
  PRIMARY KEY (id)
);

ALTER TABLE fornecedor
  ADD CONSTRAINT UQ_email UNIQUE (email);

ALTER TABLE fornecedor
  ADD CONSTRAINT UQ_telefone UNIQUE (telefone);

CREATE TABLE fornecedor_marcas
(
  fornecedor_id INT NOT NULL,
  marca_id      INT NOT NULL
);

CREATE TABLE marcas
(
  id          INT         NOT NULL AUTO_INCREMENT,
  nome        VARCHAR(20) NULL    ,
  pais_origem VARCHAR(20) NULL    ,
  PRIMARY KEY (id)
);

CREATE TABLE pedido
(
  id          INT         NOT NULL AUTO_INCREMENT,
  data_pedido DATETIME    NULL    ,
  status      VARCHAR(10) NULL    ,
  usuario_id  INT         NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE pedido_produto
(
  quantidade  INT           NULL    ,
  preco_total DECIMAL(10,2) NULL    ,
  pedido_id   INT           NOT NULL,
  produto_id  INT           NOT NULL
);

CREATE TABLE produtos
(
  id            INT           NOT NULL AUTO_INCREMENT,
  nome          VARCHAR(20)   NOT NULL,
  preco         DECIMAL(10,2) NOT NULL,
  estoque       INT           NOT NULL,
  fornecedor_id INT           NOT NULL,
  marcas_id     INT           NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE usuario
(
  id       INT         NOT NULL AUTO_INCREMENT,
  nome     VARCHAR(20) NULL    ,
  email    VARCHAR(20) NULL    ,
  telefone CHAR(11)    NULL    ,
  PRIMARY KEY (id)
);

ALTER TABLE usuario
  ADD CONSTRAINT UQ_email UNIQUE (email);

ALTER TABLE usuario
  ADD CONSTRAINT UQ_telefone UNIQUE (telefone);

ALTER TABLE pedido
  ADD CONSTRAINT FK_usuario_TO_pedido
    FOREIGN KEY (usuario_id)
    REFERENCES usuario (id);

ALTER TABLE pedido_produto
  ADD CONSTRAINT FK_pedido_TO_pedido_produto
    FOREIGN KEY (pedido_id)
    REFERENCES pedido (id);

ALTER TABLE pedido_produto
  ADD CONSTRAINT FK_produtos_TO_pedido_produto
    FOREIGN KEY (produto_id)
    REFERENCES produtos (id);

ALTER TABLE produtos
  ADD CONSTRAINT FK_fornecedor_TO_produtos
    FOREIGN KEY (fornecedor_id)
    REFERENCES fornecedor (id);

ALTER TABLE produtos
  ADD CONSTRAINT FK_marcas_TO_produtos
    FOREIGN KEY (marcas_id)
    REFERENCES marcas (id);

ALTER TABLE fornecedor_marcas
  ADD CONSTRAINT FK_fornecedor_TO_fornecedor_marcas
    FOREIGN KEY (fornecedor_id)
    REFERENCES fornecedor (id);

ALTER TABLE fornecedor_marcas
  ADD CONSTRAINT FK_marcas_TO_fornecedor_marcas
    FOREIGN KEY (marca_id)
    REFERENCES marcas (id);

ALTER TABLE fornecedor_marcas
ADD PRIMARY KEY (fornecedor_id, marca_id);

ALTER TABLE pedido_produto 
ADD PRIMARY KEY (pedido_id, produto_id);