<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 10vh;
            width: 100vw;
            margin: 0;
        }
    </style>

</head>

<body>
    <h1>Identity Table</h1>
    <?php
    $user = [
        ["name" => "Sajid", "age" => 22],
        ["name" => "Ishfaq", "age" => 23],
        ["name" => "Rahat", "age" => 25]
    ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>

        <?php foreach($user as $i) : ?>
            <tr>
                <td><?= $i["name"] ?></td>
                <td><?= $i["age"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>