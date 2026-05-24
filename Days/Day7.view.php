<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: grid;
            place-items: start;
            min-height: 10vh;
            margin: 0;
            font-family: 'Times New Roman', serif;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a:hover {
            color: red;
        }
    </style>
</head>

<body>

    <h1> <?= $business['name'] ?></h1>
    
    <ol>

        <?php foreach ($business['category'] as $category): ?>
            <li>
                <?= $category; ?>
            </li>
        <?php endforeach; ?>

    </ol>

</body>

</html>