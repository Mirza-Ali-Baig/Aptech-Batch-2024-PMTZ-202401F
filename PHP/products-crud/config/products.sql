CREATE TABLE if NOT EXISTS categories (
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(30) not null
);

INSERT INTO categories (name) VALUES
('Electronics'),
('Clothing'),
('Home & Kitchen'),
('Books'),
('Beauty & Personal Care'),
('Sports & Outdoors'),
('Toys & Games'),
('Automotive'),
('Health & Wellness'),
('Jewelry & Accessories');

CREATE TABLE if NOT EXISTS products (
	id int PRIMARY KEY AUTO_INCREMENT,
    title varchar(100) NOT null,
    description text not null,
    price int not null,
    image varchar(300) not null,
    category_id int,
    FOREIGN KEY(category_id) REFERENCES categories (id)
);