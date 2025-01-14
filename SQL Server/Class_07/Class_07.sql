-- !!!!!!!!!!!!!!!!!!!!!!!!!!!! Class 07 !!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- !!!!!!!!!!!!!!!!!!!!!!!!!!!! Topics !!!!!!!!!!!!!!!!!!!!!!!!!!!!
-- Variable TSQL
-- Stored Proceduers

CREATE DATABASE pmtz_202401f_class_07;



DECLARE @name VARCHAR(30);


-- USE @name='SQL Server';

SELECT @name='SQL Server';

PRINT @name;

SELECT @name;

SELECT @name as 'Name';


DECLARE @subject VARCHAR(40) = 'SQL';

SELECT @subject as subject


-- Create a Proceduers
GO

CREATE PROCEDURE Demo
AS
BEGIN

    DECLARE @name VARCHAR(30) ='Kashif';
    DECLARE @email VARCHAR(30) ='kashif@gmail.com';

    SELECT @name as 'Name ', @email as 'Email'
END



EXEC Demo;
EXECUTE Demo;



CREATE TABLE Teachers(
    id INT PRIMARY KEY IDENTITY(1,1),
    name NVARCHAR(200) not NULL,
    salary DECIMAL not NULL
);

GO
CREATE PROCEDURE InsertTeacher
@name VARCHAR(200),
@salary DECIMAL(10,2)
as
BEGIN

    INSERT INTO Teachers (name,salary) VALUES (@name,@salary)
END


GO

EXEC InsertTeacher 'Ali',120000;
GO;


SELECT * FROM Teachers;