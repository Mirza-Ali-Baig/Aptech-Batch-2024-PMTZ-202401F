<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            font-size: 50px;
            text-align: center;
            margin: 100px;
        }
    </style>
</head>

<body>
    <h1>Hello PHP</h1>
    <?php
    // echo "<p>lorem<p>";
    $employees = [
        [
            "id" => 3,
            "name" => "Jill",
            "age" => 28,
            "Salary" => 12000
        ],
        [
            "id" => 4,
            "name" => "Jake",
            "age" => 22,
            "Salary" => 15000,
        ],
        [
            "id" => 5,
            "name" => "Jess",
            "age" => 24,
            "Salary" => 10000
        ],
        [
            "id" => 6,
            "name" => "Jim",
            "age" => 26,
            "Salary" => 9000
        ],
        [
            "id" => 7,
            "name" => "Jack",
            "age" => 28,
            "Salary" => 12000
        ]
    ];
    ?>
    <table border="10px" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($employees as $employee) {
                // echo "<pre>";
                // print_r($employee['id']);
                echo " <tr>
                            <td>$employee[id]</td>
                            <td>$employee[name]</td>
                            <td>$employee[age]</td>
                            <td>$employee[Salary]</td>
                        </tr>";
            }
            ?>
            <!-- <tr>
                <td>1</td>
                <td>Yasir</td>
                <td>50</td>
                <td>1000</td>
            </tr> -->
        </tbody>
    </table>
</body>

</html>
<script>
    // alert();
</script>