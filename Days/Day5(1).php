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

    <h1>Recommendeds Books</h1>

    <?php
    $books = [
        [
            "name" => "The Kite Runner",
            "author" => "Khaled Hosseini",
            "purchase_url" => "https://www.thekiterunner.com"
        ],

        [
            "name" => "Project Hail Mary",
            "author" => "Andy Weir",
            "purchase_url" => "https://www.projecthailmary.com"
        ],

        [
            "name" => "The Silent Patient",
            "author" => "Alex Michaelides",
            "purchase_url" => "https://www.thesilentpatient.com"
        ]
    ];

    $filterByAuther = function (array $books, string $author) {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book["author"] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    };

    $filter = $filterByAuther($books, "Andy Weir")

    ?>

    <ol>
        <?php foreach ($filter as $book) : ?>

            <li>

                <a href=" <?= htmlspecialchars($book["purchase_url"]) ?>">
                    <?= $book["name"]; ?>
                </a>

            </li>

        <?php endforeach; ?>
    </ol>

</body>

</html>