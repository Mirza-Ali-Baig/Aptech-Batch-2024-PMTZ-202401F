-- !!!!!!!!!!!!!!!!!!!! Class 09 !!!!!!!!!!!!!!!!!!!!!!!
-- !!!!!!!!!!!!!!!!!!!! Topics !!!!!!!!!!!!!!!!!!!!!!!
-- Functions
-- System Functions
-- Custom Functions
-- Scalar Function
-- Inline Function
-- Multiline Function


SELECT COUNT(*);

SELECT LEN('123567vjbd');

SELECT CONCAT('Mr', ' ','Khan');

SELECT CAST(GETDATE() as varchar(50));


GO
CREATE FUNCTION addition()
RETURNS INT
as
BEGIN
    RETURN 10 + 20;
END

GO

SELECT dbo.addition();

GO

ALTER FUNCTION addition(@num1 INT,@num2 INT)
    RETURNS INT
as
BEGIN
    RETURN @num1 + @num2;
END

GO
SELECT dbo.addition(30044,496830);
SELECT dbo.addition(30044,496830) as TotalAmount;



-- 

CREATE TABLE Users(
    id INT PRIMARY KEY IDENTITY,
    name VARCHAR(30) NOT NULL UNIQUE,
    email VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(30) CHECK(LEN(password) >= 6) NOT NULL
);

INSERT INTO Users (name, email, password) VALUES ('Ali Khan', 'ali.khan@example.com', 'password1');
INSERT INTO Users (name, email, password) VALUES ('Fatima Ahmed', 'fatima.ahmed@example.com', 'password2');
INSERT INTO Users (name, email, password) VALUES ('Usman Malik', 'usman.malik@example.com', 'password3');
INSERT INTO Users (name, email, password) VALUES ('Sara Iqbal', 'sara.iqbal@example.com', 'password4');
INSERT INTO Users (name, email, password) VALUES ('Hassan Raza', 'hassan.raza@example.com', 'password5');
INSERT INTO Users (name, email, password) VALUES ('Ayesha Khan', 'ayesha.khan@example.com', 'password6');
INSERT INTO Users (name, email, password) VALUES ('Bilal Ahmed', 'bilal.ahmed@example.com', 'password7');
INSERT INTO Users (name, email, password) VALUES ('Nida Shah', 'nida.shah@example.com', 'password8');
INSERT INTO Users (name, email, password) VALUES ('Omer Farooq', 'omer.farooq@example.com', 'password9');
INSERT INTO Users (name, email, password) VALUES ('Zainab Ali', 'zainab.ali@example.com', 'password10');
INSERT INTO Users (name, email, password) VALUES ('Tariq Javed', 'tariq.javed@example.com', 'password11');
INSERT INTO Users (name, email, password) VALUES ('Mariam Noor', 'mariam.noor@example.com', 'password12');
INSERT INTO Users (name, email, password) VALUES ('Faisal Qureshi', 'faisal.qureshi@example.com', 'password13');
INSERT INTO Users (name, email, password) VALUES ('Sadia Malik', 'sadia.malik@example.com', 'password14');
INSERT INTO Users (name, email, password) VALUES ('Kamran Khan', 'kamran.khan@example.com', 'password15');
INSERT INTO Users (name, email, password) VALUES ('Nadia Hussain', 'nadia.hussain@example.com', 'password16');
INSERT INTO Users (name, email, password) VALUES ('Shahid Afridi', 'shahid.afridi@example.com', 'password17');
INSERT INTO Users (name, email, password) VALUES ('Amina Bukhari', 'amina.bukhari@example.com', 'password18');
INSERT INTO Users (name, email, password) VALUES ('Rizwan Ahmed', 'rizwan.ahmed@example.com', 'password19');
INSERT INTO Users (name, email, password) VALUES ('Sana Khan', 'sana.khan@example.com', 'password20');


SELECT * FROM Users WHERE name='Kamran Khan'

GO
CREATE FUNCTION GetUserByName(@name varchar(30))
RETURNS TABLE
AS
    RETURN (SELECT * FROM Users WHERE name=@name);
GO

SELECT * FROM dbo.GetUserByName('Tariq Javed');

SELECT name FROM dbo.GetUserByName('Tariq Javed');




-- Index

SELECT * FROM Products;

SELECT * FROM Products ORDER By price;
 

SELECT * FROM Products WHERE price <=1000;



CREATE TABLE Demo2(
    id int PRIMARY KEY,
    name VARCHAR(20)
)

INSERT Into Demo2 VALUES (2,'Basit');

INSERT Into Demo2 VALUES (5,'Usama');
INSERT Into Demo2 VALUES (3,'Kashif');

INSERT Into Demo2 VALUES (1,'Khan');



SELECT * FROM Demo2;


CREATE INDEX idx_3734
ON Products (price);