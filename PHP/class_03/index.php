<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variables</title>
</head>

<body>
    <h1>Introduction To Super Global Variables</h1>
    <ul>
        <li>$_GET</li>
        <li>$_POST</li>
        <li>$_SERVER</li>
        <li>$_REQUEST</li>
        <li>$_SESSION</li>
        <li>$_FILES</li>
    </ul>

    <form action="action.php" method="get">
        <input type="text" name="name" placeholder="Name" required>
        <br>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="number" name="age" placeholder="Age" required>
        <br>
        <input type="text" name="city" placeholder="City" required>
        <br>
        <button>
            Submit
        </button>
    </form>


    <?php
        // echo '<pre>';
        // print_r($_SERVER);
    ?>
</body>
</html>