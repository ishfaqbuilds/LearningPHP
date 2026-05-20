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
        "Rahat",
        "Ishfaq",
        "Sajid"
    ];

    $age = [
        22,
        25,
        25
    ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>

        <?php for($i = 0; $i < count($user); $i++) :?>
            <tr>
                <td><?= $user[$i] ?></td>
                <td><?= $age[$i] ?></td>
            </tr>
        <?php endfor; ?>

    </table>

</body>

</html>