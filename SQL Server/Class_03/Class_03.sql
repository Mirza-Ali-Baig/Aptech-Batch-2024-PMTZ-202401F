-- !!!!!!!!!!!!!!!!!!!!!!!!! Classs 03 !!!!!!!!!!!!!!!!!!!!!!!!
-- !!!!!!!!!!!!!!!!!!!!!!!!! Topics !!!!!!!!!!!!!!!!!!!!!!!!

-- Constrains /Rule
-- More On Select Command
-- Update data
-- Delete data
-- Truncate table
-- Drop table
-- Drop database


CREATE DATABASE pmtz_202401f_class_03;

CREATE TABLE Students(
    id int,
    name VARCHAR(40),
    email VARCHAR(50),
    age INT
);

insert into Students VALUES (2,'Taha','taha@gmail.com',30);


insert into Students VALUES
(2,'Rehan','Rehan@gmail.com',30),
(2,'Baist','Baist@gmail.com',0),
(2,'Usman','Usman@gmail.com',50),
(2,'Waseem','Waseem@gmail.com',30);
-- insert into Students VALUES (2,'Taha','taha@gmail.com',30);
insert into Students (id,name,age) VALUES (2,'Taha',30);


Select * FROM Students


-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Constraints/Rules !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

-- NOT NULL
-- UNIQUE
-- CHECK
-- DEFAULT
-- PRIMARY KEY
-- FOREIGN KEY

CREATE TABLE Employees(
    id INT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    age INT NOT NULL CHECK(age > 18),
    city VARCHAR(20) NOT NULL DEFAULT 'Karachi',
    salary DECIMAL(10,2) NOT NULL
)

SELECT * From Employees;


INSERT Into Employees (id,name,email,age,salary) VALUES 
(2,'Islam','Islam@gmail.com',22,20000),
(3,'Babar','Babar@gmail.com',22,20000),
(4,'Umair','Umair@gmail.com',22,20000);



UPDATE Employees
SET age=30 WHERE name='Babar';

UPDATE Employees
SET age=25 WHERE name='Umair';




select * from Students;

DELETE from Students WHERE name='Taha';


-- Truncate table

TRUNCATE TABLE Students;



-- DROP TABLE

DROP TABLE Students

DROP DATABASE pmtz_202401f_class_03;
