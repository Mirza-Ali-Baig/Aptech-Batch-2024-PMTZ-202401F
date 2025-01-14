-- !!!!!!!!!!!!!!!!!!!!!!!!!!! Class 06 !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- !!!!!!!!!!!!!!!!!!!!!!!!!!! Topics !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- Joins
-- Views

CREATE DATABASE pmtz_202401f_class_06

-- LMS


CREATE TABLE Teachers(
    id INT PRIMARY KEY IDENTITY(1,1),
    name NVARCHAR(200) not NULL,
    salary DECIMAL not NULL
);

INSERT into Teachers (name,salary)
VALUES
('Taha',50000),
('Umer',70000),
('Waseem',80000);

CREATE TABLE Courses(
    id int PRIMARY KEY IDENTITY,
    name NVARCHAR(200) not NULL,
    fees DECIMAL(10,2) NOT NULL
)


INSERT into Courses (name,fees) VALUES
('Web Development',10000),
('Mobile App Development',15000),
('Software Development',20000);

CREATE TABLE Students(
    id int PRIMARY KEY IDENTITY,
    name NVARCHAR(100) not NULL,
    email NVARCHAR(100) NOT NULL UNIQUE,
    course_id INT,
    teacher_id INT,
    FOREIGN KEY(course_id) REFERENCES Courses (id),
    FOREIGN KEY(teacher_id) REFERENCES Teachers (id),
)


INSERT into Students (name,email,course_id,teacher_id) VALUES
('Usama','Usama@gmail.com',1,1),
('Babar','Babar@gmail.com',2,2),
('Qasim','Qasim@gmail.com',3,3);

SELECT * FROM Students;

-- Inner Join
-- Left Join
-- Right Join
-- Full Join
-- Cross Join

-- Inner Join

SELECT Students.id,Students.name,Students.email,Courses.name as Course,Courses.fees,Teachers.name as Teacher
FROM Students INNER JOIN Courses ON Students.course_id=Courses.id INNER JOIN Teachers on Students.teacher_id=Teachers.id;

SELECT S.id,S.name,S.email,C.name as Course,C.fees,T.name as Teacher
FROM Students S INNER JOIN Courses C ON S.course_id=C.id INNER JOIN Teachers T on S.teacher_id=T.id;


-- View
GO
CREATE VIEW StudentsData
as
(SELECT S.id,S.name,S.email,C.name as Course,C.fees,T.name as Teacher
FROM Students S INNER JOIN Courses C ON S.course_id=C.id INNER JOIN Teachers T on S.teacher_id=T.id);
GO


SELECT id,name,email,Course FROM StudentsData;
SELECT * FROM StudentsData;


