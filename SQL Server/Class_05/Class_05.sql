-- !!!!!!!!!!!!!!!!!!!!!!!!!! Class 05 !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

-- !!!!!!!!!!!!!!!!!!!!!!!!!! Topics !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- SlELECT With WHERE Clause
-- TOP & Percent
--  AS Keyword
-- Operators
-- Advance Filtering (IN, NOT IN,BETWEEN, NOT BETWEEN, LIKE, NOT LIKE , IS NULL, IS NOT NULL)

CREATE DATABASE pmtz_202401f_class_05;

CREATE TABLE products (
    id INT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    price INT NOT NULL CHECK(price >= 5),
    quantity INT NOT NULL CHECK(quantity > 0) DEFAULT 1
);

INSERT INTO products (id, title, price, quantity) VALUES
(1, 'Wireless Mouse', 25, 10),
(2, 'Bluetooth Headphones', 70, 5),
(3, 'USB-C Charging Cable', 15, 20),
(4, 'Smartphone Stand', 30, 8),
(5, 'Laptop Backpack', 45, 12),
(6, 'Mechanical Keyboard', 90, 6),
(7, 'Gaming Monitor', 200, 4),
(8, 'External SSD 1TB', 100, 7),
(9, 'Wireless Charger', 20, 15),
(10, 'Webcam 1080p', 50, 9),
(11, 'Portable Hard Drive 2TB', 80, 5),
(12, 'Noise Cancelling Headphones', 150, 3),
(13, 'Smartwatch', 200, 6),
(14, 'Fitness Tracker', 100, 10),
(15, 'Bluetooth Speaker', 60, 4),
(16, 'HDMI Cable', 12, 25),
(17, 'Phone Case', 15, 15),
(18, 'Wireless Earbuds', 80, 8),
(19, 'Streaming Device', 50, 7),
(20, 'Gaming Mouse', 40, 10),
(21, '4K TV', 600, 2),
(22, 'Tablet Stand', 30, 9),
(23, 'Laptop Cooling Pad', 25, 6),
(24, 'USB Hub', 20, 12),
(25, 'Digital Camera', 500, 3),
(26, 'VR Headset', 400, 2),
(27, 'Action Camera', 300, 5),
(28, 'Wireless Print Scanner', 150, 4),
(29, 'Smart Home Hub', 100, 8),
(30, 'Home Security Camera', 120, 6),
(31, 'Smart Light Bulb', 20, 15),
(32, 'Wireless Router', 100, 5),
(33, 'Streaming Microphone', 80, 4),
(34, 'Smart Thermostat', 150, 2),
(35, 'Power Bank 20000mAh', 40, 10),
(36, 'Digital Photo Frame', 100, 3),
(37, 'Wireless Charging Stand', 25, 12),
(38, 'Electric Toothbrush', 90, 5),
(39, 'Cordless Vacuum Cleaner', 250, 2),
(40, 'Air Fryer', 100, 6),
(41, 'Instant Pot', 80, 4),
(42, 'Espresso Machine', 300, 1),
(43, 'Electric Kettle', 40, 7),
(44, 'Blender', 60, 8),
(45, 'Slow Cooker', 50, 10),
(46, 'Food Processor', 150, 3),
(47, 'Rice Cooker', 30, 12),
(48, 'Cookware Set', 200, 5),
(49, 'Cutlery Set', 40, 10),
(50, 'Kitchen Scale', 20, 15);


SELECT * FROM products;

-- Order By

SELECT * FROM products ORDER BY price ASC;
SELECT * FROM products ORDER BY price DESC;


SELECT * FROM products WHERE price=50;


-- !!!!!!!!!!!!!!!!!!!! Operators !!!!!!!!!!!!!!!!!!!!!!

-- Arithmetic Operators
-- +, -, *, /, %

SELECT *,price * 0.8 as salesPrice From products


SELECT *, price * 0.8 as discount from products;
-- Relational / Comparison  Operators
-- =, !=, <, >, <=, >=


SELECT * FROM products WHERE title='Laptop Backpack'; -- Find
SELECT * FROM products WHERE title='Laptop '; -- Not Find
SELECT * FROM products WHERE title='Laptop '; -- Not Find
SELECT * FROM products WHERE price=50;
SELECT * FROM products WHERE quantity=5;
SELECT * FROM products WHERE price!=100;
SELECT * FROM products WHERE quantity > 6;
SELECT * FROM products WHERE quantity >= 6;
-- Logical Operators
-- AND, OR, NOT
SELECT * FROM products WHERE price >= 50 AND price <=100;

SELECT * FROM products WHERE price >= 50 OR price <=100;

SELECT * FROM products WHERE price = 50 AND price =70;

SELECT * FROM products WHERE price = 50 OR price =70;

-- If You Used = in both Condition and yoy have same column then You need to Used OR Operator
-- If You Used other then = then You Need to Used AND 

SELECT * FROM products WHERE price >= 70 OR quantity <=5;
SELECT * FROM products WHERE price >= 70 AND quantity <=5;




SELECT * from products WHERE price >=20 AND price <=100
SELECT * from products WHERE price >=20 OR price <=100

SELECT * from products WHERE price=50 and price=70 AND price=90

SELECT * from products WHERE price=50 OR price=70 OR price=90

INSERT INTO products (id, title, price, quantity) VALUES
(51, 'Dell XPS 13', 999.99, 10),
(52, 'Apple MacBook Air', 1099.00, 8),
(53, 'HP Spectre x360', 1199.99, 5),
(54, 'Lenovo ThinkPad X1 Carbon', 1399.00, 7),
(55, 'Asus ZenBook 14', 849.99, 12),
(56, 'Microsoft Surface Laptop 4', 1299.99, 6),
(57, 'Acer Swift 3', 699.99, 15),
(58, 'Razer Blade 15', 1999.99, 4),
(59, 'LG Gram 17', 1699.00, 9),
(60, 'Samsung Galaxy Book Pro', 999.99, 11),
(61, 'Dell Inspiron 15', 599.99, 3),
(62, 'HP Envy 13', 949.00, 2),
(63, 'Apple MacBook Pro 14', 1999.00, 1),
(64, 'Lenovo IdeaPad 5', 749.99, 10),
(65, 'Asus ROG Zephyrus G14', 1499.99, 5),
(66, 'Microsoft Surface Pro 7', 899.99, 8),
(67, 'Acer Predator Helios 300', 1299.00, 12),
(68, 'HP Omen 15', 1399.99, 15),
(69, 'Dell G5 15', 1099.00, 7),
(70, 'Lenovo Legion 5', 1199.99, 6);


-- select * FROM products WHERE title='Apple MacBook Air' OR title='Microsoft Surface Laptop 4' OR title='Apple MacBook Pro 14';
-- IN

select * FROM products WHERE title IN('Apple MacBook Air','Microsoft Surface Laptop 4','Apple MacBook Pro 14')

select * FROM products WHERE title NOT IN('Apple MacBook Air','Microsoft Surface Laptop 4','Apple MacBook Pro 14')

SELECT * from products WHERE price BETWEEN 50 and 100;

SELECT * from products WHERE price NOT BETWEEN 50 and 100;


-- Like Operator

-- WildCards
-- %
-- _


SELECT * from products WHERE title LIKE '%a';

SELECT * from products WHERE title LIKE '%b';

SELECT * from products WHERE title LIKE '%d';

SELECT * from products WHERE title LIKE '%ra';


SELECT * from products WHERE title LIKE 'a%';

SELECT * from products WHERE title LIKE '__a%';


SELECT * from products WHERE title LIKE '%a_';


SELECT * from products WHERE title LIKE '%a%';


SELECT * from products WHERE title LIKE 'a%b';
SELECT * from products WHERE title NOT LIKE 'a%d';


-- NULL

SELECT * FROM products WHERE title is NULL

SELECT * FROM products WHERE title is NOT NULL