use kjw_e_store;
CREATE TABLE products(
product_id INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
product_title VARCHAR(100),
product_desc VARCHAR(250),
product_keywords VARCHAR(100),
cat_id INT,
brand_id INT,
product_image1 VARCHAR(256),
product_image2 VARCHAR(256),
product_image3 VARCHAR(256),
product_price INT,
date TIMESTAMP,
status VARCHAR(30)
);