CREATE TABLE courses(
    id int PRIMARY key AUTO_INCREMENT,
    name varchar(30) not null
); 

INSERT INTO courses (name) 
VALUES 
    ('Introduction to Python'),
    ('Data Structures and Algorithms'),
    ('Web Development with JavaScript'),
    ('Object-Oriented Programming in Java'),
    ('Machine Learning with Python'),
    ('Database Management Systems'),
    ('Full Stack Web Development'),
    ('Mobile App Development with Flutter'),
    ('Introduction to C++'),
    ('Software Engineering Principles');


CREATE TABLE students(
    id int PRIMARY key AUTO_INCREMENT,
    name varchar(30) not null,
    email varchar(30) not null UNIQUE,
    phone varchar(30) not null,
    course_id int,
    FOREIGN KEY(course_id) REFERENCES courses(id)
)