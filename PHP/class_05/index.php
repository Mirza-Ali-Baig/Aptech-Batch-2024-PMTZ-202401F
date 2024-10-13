<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to Database In PHP</title>
</head>
<body>
        <h2>How To Connect a Database?</h2>
        <ul>
            <li>Procedural Way</li>
            <li>OOPs Way</li>
            <li>PDO Way</li>
        </ul>

        <!-- hostname => localhost -->
        <!-- username => root -->
        <!-- password => '' -->
        <!-- database => your database name -->
         <?php
         $host='localhost';
         $user='root';
         $pass='';
         $db='pmtz_202401f';
        //  mysql_connect(); old version
         $connection=mysqli_connect($host,$user,$pass,$db); // new and improved version 
            if($connection){
                echo "Connection Successfull";
            }else{
                echo "Something went wrong";
            }
            
            $sql="
            CREATE TABLE if not EXISTS students(
                id int PRIMARY KEY AUTO_INCREMENT,
                name varchar(30) not null,
                email varchar(30) not null,
                age int not null
                );
                ";
                
                $result= mysqli_query($connection,$sql);
            if($result){
                echo "Result Successfull";
            }else{
                echo mysqli_error($connection); 
            }
            print_r($result);
         ?>
</body>
</html>