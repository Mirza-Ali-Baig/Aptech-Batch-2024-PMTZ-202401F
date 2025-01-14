-- !!!!!!!!!!!!!!!!!!!!!!!!! Class 08 !!!!!!!!!!!!!!!!!!!!!!!!!!
-- !!!!!!!!!!!!!!!!!!!!!!!!! Topics !!!!!!!!!!!!!!!!!!!!!!!!!!
-- TRY/CATCH => Exception Hendling / Error Hendling
-- transction
CREATE DATABASE pmtz_202401f_class_08
-- 
CREATE TABLE
    Users (
        id int PRIMARY KEY IDENTITY,
        name VARCHAR(30) not NULL,
        email VARCHAR(30) not NULL UNIQUE,
        password VARCHAR(20) CHECK (LEN (password) > 5)
    )
INSERT into
    Users (name, email, password)
VALUES
    ('Usman', 'Usman@gmail.com', '123456');

SELECT
    *
FROM
    Users;

BEGIN TRY
INSERT into
    Users (name, email, password)
VALUES
    ('Usman', 'Usman@gmail.com', '1234');

END TRY BEGIN CATCH PRINT 'Something Went Wrong';

PRINT ERROR_MESSAGE () END CATCH
CREATE TABLE
    Customers (
        id VARCHAR(50) PRIMARY KEY DEFAULT NEWID (),
        name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL UNIQUE,
    )
INSERT INTO
    Customers (name, email)
VALUES
    ('Ali Khan', 'ali.khan@example.com'),
    ('Fatima Ahmed', 'fatima.ahmed@example.com'),
    ('Omar Malik', 'omar.malik@example.com'),
    ('Ayesha Siddiqui', 'ayesha.siddiqui@example.com'),
    ('Bilal Hussain', 'bilal.hussain@example.com'),
    ('Sara Ali', 'sara.ali@example.com'),
    ('Zainab Raza', 'zainab.raza@example.com'),
    ('Hassan Shah', 'hassan.shah@example.com'),
    ('Nadia Khan', 'nadia.khan@example.com'),
    ('Usman Tariq', 'usman.tariq@example.com');

CREATE TABLE
    Accounts (
        id VARCHAR(40) PRIMARY KEY DEFAULT NEWID (),
        customer_id VARCHAR(50) NOT NULL,
        amount DECIMAL Not NULL DEFAULT 0.0,
        FOREIGN KEY (customer_id) REFERENCES Customers (id),
    );

INSERT Into
    Accounts (customer_id, amount)
VALUES
    ('0D40EAD8-CC27-4F12-9D2F-4D5D40678DB3', 5000),
    ('68D6828B-B284-471C-81E8-64386ABBD8A4', 7000)
CREATE TABLE
    Transactions (
        id VARCHAR(40) PRIMARY KEY DEFAULT NEWID (),
        type VARCHAR(50) NOT NULL,
        amount DECIMAL Not NULL,
        account_id VARCHAR(40),
        transaction_date DATETIME DEFAULT GETDATE (),
        FOREIGN KEY (account_id) REFERENCES Accounts (id),
    )
SELECT
    *
from
    Customers


GO
    CREATE PROCEDURE SP_Deposit
    @accountId VARCHAR(40) ,
    @amount DECIMAL
    as
    BEGIN
        BEGIN TRANSACTION
        BEGIN TRY

            IF @amount <= 0
            BEGIN
                  PRINT 'Deposit amount must be greater than zero.';
                    rollback transaction;
                return;
            END
            DECLARE @balance DECIMAL;

            SELECT @balance= amount FROM Accounts WHERE id=@accountId;

            IF @balance is NULL
            BEGIN
                PRINT 'No Account Found';
                ROLLBACK TRANSACTION;
                RETURN
            END

            UPDATE Accounts
            Set amount=@balance + @amount WHERE id=@accountId;

            INSERT INTO Transactions (account_id,amount,type)
            VALUES (@accountId,@amount,'Deposit');

            commit transaction;
        END TRY
        BEGIN CATCH 
                IF @@TRANCOUNT > 0
                ROLLBACK TRANSACTION;
                PRINT 'An error occurred during the transaction.';
                PRINT ERROR_MESSAGE();
        END CATCH
    END

SELECT * FROM Customers
SELECT * FROM Accounts

SELECT * FROM Transactions


EXEC SP_Deposit '4A570FBC-F63F-46AF-ACE8-D7C65A906CE6',30000


EXEC SP_Deposit '4A570FBC-F63F-46AF-ACE8-D7C65A906CE6',30000


SELECT C.id, C.name,C.email,T.type,T.amount,T.transaction_date
FROM Transactions T JOIN Accounts A
ON T.account_id=A.id
JOIN Customers C 
On A.customer_id=C.id WHERE C.id='68D6828B-B284-471C-81E8-64386ABBD8A4'


GO
    CREATE PROCEDURE SP_Withdraw
    @accountId VARCHAR(40) ,
    @amount DECIMAL
    as
    BEGIN
        BEGIN TRANSACTION
        BEGIN TRY

            IF @amount <= 0
            BEGIN
                  PRINT 'Withdraw amount must be greater than zero.';
                    rollback transaction;
                return;
            END
            DECLARE @balance DECIMAL;

            SELECT @balance= amount FROM Accounts WHERE id=@accountId;

            IF @balance is NULL
            BEGIN
                PRINT 'No Account Found';
                ROLLBACK TRANSACTION;
                RETURN
            END

            IF @balance < @amount 
            BEGIN
                PRINT 'Balance Must be greater then Ammount';
                ROLLBACK TRANSACTION;
                RETURN
            END

            UPDATE Accounts
            Set amount=@balance - @amount WHERE id=@accountId;

            INSERT INTO Transactions (account_id,amount,type)
            VALUES (@accountId,@amount,'Withdraw');

            commit transaction;
        END TRY
        BEGIN CATCH 
                IF @@TRANCOUNT > 0
                ROLLBACK TRANSACTION;
                PRINT 'An error occurred during the transaction.';
                PRINT ERROR_MESSAGE();
        END CATCH
    END


    GO

    -- EXEC SP_Withdraw 

    EXEC SP_Withdraw '4A570FBC-F63F-46AF-ACE8-D7C65A906CE6',5000;


GO
CREATE PROCEDURE SP_Transfer
@senderId VARCHAR(40),
@recieverId VARCHAR(40),
@amount DECIMAL
AS
BEGIN
    BEGIN TRANSACTION
    BEGIN TRY
        IF @amount <=0
        BEGIN
            PRINT 'Transfer amount must be greater than zero.';
            rollback transaction;
            return;
        END

        DECLARE @senderBalance DECIMAL;

        SELECT @senderBalance=amount FROM Accounts WHERE id =@senderId;
        IF @senderBalance is NULL
        BEGIN
            PRINT 'No Account Found';
            ROLLBACK TRANSACTION;
            RETURN
        END

        IF @senderBalance < @amount
        BEGIN
             PRINT 'Balance Must be greater then Amount';
            ROLLBACK TRANSACTION;
            RETURN
        END

        DECLARE @recieverBalance DECIMAL;

        SELECT @recieverBalance=amount FROM Accounts WHERE id =@recieverId;
        
        IF @recieverBalance is NULL
        BEGIN
            PRINT 'No Account Found';
            ROLLBACK TRANSACTION;
            RETURN
        END

        UPDATE Accounts 
        SET amount=@senderBalance - @amount WHERE id=@senderId;

        UPDATE Accounts
        SET amount=@recieverBalance + @amount WHERE id=@recieverId;

        INSERT Into Transactions (type,amount,account_id)
        VALUES
        ('Transfered',@amount,@senderId),
        ('Recieved',@amount,@recieverId);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH 
    IF @@TRANCOUNT > 0
        ROLLBACK TRANSACTION;
        PRINT 'An error occurred during the transaction.';
        PRINT ERROR_MESSAGE();
    END CATCH
END


GO
SELECT * FROM Accounts;
EXECUTE SP_Transfer '4A570FBC-F63F-46AF-ACE8-D7C65A906CE6',
'5B5BD07D-A3A0-42CE-9F08-86552205E571',5000;