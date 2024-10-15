<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App With MYSQL : Details Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">CRUD App With MYSQL : Details Page</h1>
    </div>
    <div class="row">
        <div class="col-6 mx-auto">
            <?php
            require_once "config/connection.php";
            $id = $_GET['id'];
            $result = mysqli_query($db_connection, "SELECT * FROM `students` WHERE id=$id");
            if (mysqli_num_rows($result) > 0) {
                $student = mysqli_fetch_assoc($result);
                echo '<div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">Name : </div>
                        <div class="col">' . $student['name'] . '</div>
                    </div>
                    <div class="row">
                        <div class="col">Email : </div>
                        <div class="col">' . $student['email'] . '</div>
                    </div>
                    <div class="row">
                        <div class="col">Age : </div>
                        <div class="col">' . $student['age'] . '</div>
                    </div>
                    <div class="row mt-5">
                        <div class="col"><a href="edit.php?id='.$student['id'].'" class="btn btn-primary w-100">Edit</a></div>
                        <div class="col"><a href="delete.php?id='.$student['id'].'" class="btn btn-danger w-100">Delete</a></div>
                        <div class="col"><a href="index.php" class="btn btn-secondary w-100">Back</a></div>
                    </div>
                </div>
            </div>';
            } else {
                echo '<div class="card">
                        <div class="card-body">
                            <h1 class="text-center"> No Student Found! </h1>
                            <div class="row mt-5">
                                <div class="col"><a href="index.php" class="btn btn-secondary w-100">Back</a></div>
                            </div>
                        </div>
                      </div>
                ';
            }
            ?>

        </div>
    </div>
</body>

</html>