<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App With MYSQL : Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">CRUD App With MYSQL : Edit Student</h1>
    </div>
    <div class="row">
        <div class="col-6 mx-auto">
            <?php
            require_once "config/connection.php";
            $id = $_GET['id'];
            $result = mysqli_query($db_connection, "SELECT * FROM `students` WHERE id=$id");
            if (mysqli_num_rows($result) > 0) {
                $student = mysqli_fetch_assoc($result);
            ?>
                <form action="edit-process.php?id=<?= $student['id']?>" method="post">
                    <div class="form-group my-3">
                        <label for="">Name</label>
                        <input class="form-control" value="<?= $student['name'] ?>" type="text" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="">Email</label>
                        <input class="form-control" value="<?= $student['email'] ?>" type="text" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="">Age</label>
                        <input class="form-control" value="<?= $student['age'] ?>" type="number" name="age" placeholder="Enter Your Age" required>
                    </div>
                    <button type="submit" class="btn btn-primary my-3 w-100">Update</button>
                </form>
            <?php
            }else {
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