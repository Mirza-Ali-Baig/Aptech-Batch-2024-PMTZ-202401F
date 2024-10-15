<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App With MYSQL : All Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">CRUD App With MYSQL : All Students</h1>

        <div class="row my-5">
            <div class="col">
                <a href="add.php" class="btn btn-success">Add Student</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Details</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'config/connection.php';
                $query = "select * from students";

                $result = mysqli_query($db_connection, $query);

                // $student=mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) > 0) {
                    while ($student = mysqli_fetch_assoc($result)) {
                        // echo "<pre>";
                        // print_r($student);
                        // echo "</pre>";

                ?>
                        <tr>
                            <th scope="row"><?php echo $student['name'] ?></th>
                            <td><?php echo $student['email'] ?></td>
                            <td><?php echo $student['age'] ?></td>
                            <td><a href="details.php?id=<?php echo $student['id'] ?>" class="btn btn-warning">Details</a></td>
                            <td><a href="edit.php?id=<?php echo $student['id'] ?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="delete.php?id=<?= $student['id'] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<caption> No Result Found </caption>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>