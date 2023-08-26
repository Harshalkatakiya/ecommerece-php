CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    qty INT NOT NULL,
    image VARCHAR(255)
);


INSERT INTO products (name, price, qty, image)
VALUES ('Product 1', 29.99, 100, 'https://in-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/5/0/50M62PA-1_T1680316147.png'),
       ('Product 2', 19.99, 50, 'https://in-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/6/7/67U19PA-1_T1680317366.png'),
       ('Product 3', 9.99, 200, 'https://in-media.apjonlinecdn.com/catalog/product/cache/314dec89b3219941707ad62ccc90e585/c/0/c08280389_1.png');


UPDATE products
SET price = 24.99, qty = 75
WHERE id = 1;

DELETE FROM products
WHERE id = 2;



-- Retrieve all products
SELECT * FROM products;

-- Retrieve products with a quantity greater than 100
SELECT * FROM products
WHERE qty > 100;

-- Retrieve products with a price between $10 and $20
SELECT * FROM products
WHERE price BETWEEN 10.00 AND 20.00;

-- Retrieve products sorted by name in ascending order
SELECT * FROM products
ORDER BY name ASC;

-- Retrieve the product with the highest price
SELECT * FROM products
WHERE price = (SELECT MAX(price) FROM products);