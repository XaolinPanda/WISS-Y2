DROP DATABASE IF EXISTS lw3_shopping;
CREATE DATABASE lw3_shopping;

USE lw3_shopping;

CREATE TABLE customer(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  name VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE article(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  name VARCHAR(100) NOT NULL,
  stock INT UNSIGNED DEFAULT 10,
  price DECIMAL(10,2),
  PRIMARY KEY (id)
);

/**
  special articles "extend" acticle entities with a vendor name
*/
CREATE TABLE special_article(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  vendor VARCHAR(100) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (id) REFERENCES article(id)
);


/**
  voucher values are fix point numbers smaller than 1
*/
CREATE TABLE voucher(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  name VARCHAR(100) NOT NULL,
  v_value DECIMAL(3,3) UNSIGNED DEFAULT 0.0,
  PRIMARY KEY (id)
);

CREATE TABLE basket(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  id_customer INT UNSIGNED NOT NULL,
  purchase_date DATE NOT NULL,
  id_voucher INT UNSIGNED,
  sum_price DECIMAL(10,2),
  PRIMARY KEY (id),
  FOREIGN KEY (id_customer) REFERENCES customer(id),
  FOREIGN KEY (id_voucher) REFERENCES voucher(id)
);

CREATE TABLE basket_item(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  id_basket INT UNSIGNED NOT NULL,
  id_article INT UNSIGNED NOT NULL,
  amount  INT UNSIGNED NOT NULL, 
  PRIMARY KEY (id),
  FOREIGN KEY (id_article) REFERENCES article(id),
  FOREIGN KEY (id_basket) REFERENCES basket(id)
);

INSERT INTO article (id, name, price) VALUES
(10, "Milch", 1.5),(11, "Käse", 3),(12, "Brot", 3),(13, "Honig", 10),(14, "Schoggi", 2);

INSERT INTO voucher (id, name, v_value) VALUES 
(100,"eldorado", 0.5),
(101,"elbandito", 0.01);

INSERT INTO customer (id, name) VALUES
(1000, "Susi Sonnenschein"),
(1001, "Lars Lustig"),
(1002, "Teo Trotzig");

