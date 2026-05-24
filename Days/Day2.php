<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>

</head>

<body>
    <h1>Recomended Books</h1>

    <?php

    $books = [
        "Atomic Habits",
        "Harry Potter",
        "John Wick"
    ];

    ?>

    <!-- Approach 1 -->
    <ul>
        <?php foreach ($books as $book) {
            echo "<li> $book </li>";
        }
        ?>
    </ul>

    <!-- Approach 2 -->
    <ul>
        <?php foreach ($books as $book) : ?>
            <li> <?= $book; ?> </li>
        <?php endforeach; ?>
    </ul>

</body>

</htm>