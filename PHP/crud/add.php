<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App With MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">CRUD App With MYSQL</h1>
    </div>
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="add-process.php" method="post">
                <div class="form-group my-3">
                    <label for="">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Email</label>
                    <input class="form-control" type="text" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Age</label>
                    <input class="form-control" type="number" name="age" placeholder="Enter Your Age" required>
                </div>
                <button type="submit" class="btn btn-primary my-3 w-100">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>