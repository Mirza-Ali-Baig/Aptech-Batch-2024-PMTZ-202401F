
-- Single Line Comment

/*
	Multiline Comment

*/

-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Class 02 !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Topics !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- How to create a database
-- How to select a database
-- How to create a table
-- How to add data in the table
-- How To Read data of table


/*
	SQL Commands are mainly categorized into five categories: 
	DDL � Data Definition Language
	DQL � Data Query Language
	DML � Data Manipulation Language
	DCL � Data Control Language
	TCL � Transaction Control Language
*/



-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  How to create a database !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 

create database pmtz_202401f_class_02;


-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! How to select a database !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
use pmtz_202401f_class_02;



-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! How to create a table !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 

create table students(
	id int,
	firstName varchar(20),
	lastName varchar(20),
	email varchar(20),
	age int
);

-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! How to add data in the table !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 

-- Insert Single Line
insert into students (id,firstName,lastName) values (1, 'M.','Hassan');

-- Insert Multiple Line
insert into 
students (id,firstName,lastName,email,age)
values (2, 'M.','Hashim','hashim@gmail.com',25),
(3, 'M.','Kashif','kashif@gmail.com',27),
(4, 'M.','Usman','usman@gmail.com',23);


-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! How To Read data of table !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 

-- All Columns
select * from students;

-- Specific Columns
select id,firstName,lastName from students;