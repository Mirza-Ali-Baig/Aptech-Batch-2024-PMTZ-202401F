CREATE TABLE users(
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) not null,
    email varchar(30) not null UNIQUE,
    password varchar(70) NOT null
);