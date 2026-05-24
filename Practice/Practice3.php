<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: grid;
            place-items: left;
            height: 10vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>

</head>

<body>

    <h2>Seasonal Fruits</h2>

    <?php
    $fruits = [
        "mango",
        "banana",
        "watermelon",
        "apple",
        "grapes"
    ];
    ?>

    <ol>
        <?php for ($i = 0; $i < count($fruits); $i++) : ?>

            <li> <?= $fruits[$i] ?> </li>

        <?php endfor; ?>
    </ol>


</body>

</html>